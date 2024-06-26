USE [cobradorapp]
GO
/****** Object:  Table [dbo].[Clientes]    Script Date: 1/05/2024 20:59:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Clientes](
	[ID_Cliente] [int] IDENTITY(1,1) NOT NULL,
	[Nombre] [varchar](255) NULL,
	[Apellidos] [varchar](255) NULL,
	[Dirección] [varchar](255) NULL,
	[Teléfono] [varchar](20) NULL,
	[Correo_electrónico] [varchar](50) NULL,
	[Estado] [varchar](20) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[ID_Cliente] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Deudas]    Script Date: 1/05/2024 20:59:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Deudas](
	[ID_Deuda] [int] IDENTITY(1,1) NOT NULL,
	[ID_Cliente] [int] NOT NULL,
	[Monto] [decimal](10, 2) NOT NULL,
	[Fecha_deuda] [date] NOT NULL,
	[Fecha_vencimiento] [date] NOT NULL,
	[Estado] [varchar](20) NOT NULL,
	[Moneda] [varchar](20) NOT NULL,
	[Nivel] [varchar](20) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[ID_Deuda] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[Deudas]  WITH CHECK ADD FOREIGN KEY([ID_Cliente])
REFERENCES [dbo].[Clientes] ([ID_Cliente])
GO
/****** Object:  StoredProcedure [dbo].[ActualizarNivelDeuda]    Script Date: 1/05/2024 20:59:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[ActualizarNivelDeuda]
AS
BEGIN
    DECLARE @FechaActual DATE = GETDATE();
    -- Actualizar niveles de deuda
    UPDATE Deudas
    SET Nivel =
        CASE
			WHEN Estado = 'Pagado' THEN 'Al Corriente'
            WHEN DATEDIFF(DAY, @FechaActual, Fecha_vencimiento) >= 10 THEN 'Al Corriente'
            WHEN DATEDIFF(DAY, @FechaActual, Fecha_vencimiento) >= 5 THEN 'Próximos'
            WHEN DATEDIFF(DAY, @FechaActual, Fecha_vencimiento) >= 0 THEN 'PorVencer'
            WHEN DATEDIFF(DAY, @FechaActual, Fecha_vencimiento) >= -5 THEN 'Vencido'
            ELSE 'Alerta'
        END;
END;
GO
/****** Object:  StoredProcedure [dbo].[ListarClientes]    Script Date: 1/05/2024 20:59:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[ListarClientes]
AS
BEGIN
	select * from Clientes
END;
GO
/****** Object:  StoredProcedure [dbo].[ListarDeduas]    Script Date: 1/05/2024 20:59:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[ListarDeduas]
AS
BEGIN
	select ID_Deuda, ID_Cliente, Monto, FORMAT(Fecha_deuda, 'yyyy-MM-dd') AS Creación, FORMAT(Fecha_vencimiento, 'yyyy-MM-dd') AS Vencimiento, Estado, Moneda, Nivel
	from Deudas
END;
GO
/****** Object:  StoredProcedure [dbo].[ListarDeudasAlCorriente]    Script Date: 1/05/2024 20:59:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[ListarDeudasAlCorriente]
AS
BEGIN
    SELECT FORMAT(Fecha_deuda, 'yyyy-MM-dd') AS Fecha_deuda_formateada, Monto
    FROM Deudas
    WHERE Nivel = 'Al corriente' AND Estado = 'Pendiente'
	ORDER BY Fecha_deuda;
END;
GO
/****** Object:  StoredProcedure [dbo].[ListarDeudasAlerta]    Script Date: 1/05/2024 20:59:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[ListarDeudasAlerta]
AS
BEGIN
	SELECT FORMAT(Fecha_deuda, 'yyyy-MM-dd') AS Fecha_deuda_formateada, Monto
    FROM Deudas
    WHERE Nivel = 'Alerta' AND Estado = 'Pendiente'
	ORDER BY Fecha_deuda;
END;
GO
/****** Object:  StoredProcedure [dbo].[ListarDeudasPorVencer]    Script Date: 1/05/2024 20:59:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[ListarDeudasPorVencer]
AS
BEGIN
	SELECT FORMAT(Fecha_deuda, 'yyyy-MM-dd') AS Fecha_deuda_formateada, Monto
    FROM Deudas
    WHERE Nivel = 'PorVencer' AND Estado = 'Pendiente'
	ORDER BY Fecha_deuda;
END;
GO
/****** Object:  StoredProcedure [dbo].[ListarDeudasPoximo]    Script Date: 1/05/2024 20:59:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[ListarDeudasPoximo]
AS
BEGIN
	SELECT FORMAT(Fecha_deuda, 'yyyy-MM-dd') AS Fecha_deuda_formateada, Monto
    FROM Deudas
    WHERE Nivel = 'Próximos' AND Estado = 'Pendiente'
	ORDER BY Fecha_deuda;
END;
GO
/****** Object:  StoredProcedure [dbo].[ListarDeudasVencido]    Script Date: 1/05/2024 20:59:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[ListarDeudasVencido]
AS
BEGIN
	SELECT FORMAT(Fecha_deuda, 'yyyy-MM-dd') AS Fecha_deuda_formateada, Monto
    FROM Deudas
    WHERE Nivel = 'Vencido' AND Estado = 'Pendiente'
	ORDER BY Fecha_deuda;
END;
GO
/****** Object:  StoredProcedure [dbo].[ObtenerDatosClientesDeudas]    Script Date: 1/05/2024 20:59:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[ObtenerDatosClientesDeudas]
AS
BEGIN
    DECLARE @MontoPagado DECIMAL(10,2);
    DECLARE @DeudaTotal DECIMAL(10,2);
    DECLARE @NumClientes INT;
    DECLARE @DeudasPendientes INT;

    -- Calcular Monto Pagado
    SELECT @MontoPagado = SUM(Monto)
    FROM Deudas
    WHERE Estado = 'Pagado';

    -- Calcular Deuda Total
    SELECT @DeudaTotal = SUM(Monto)
    FROM Deudas
    WHERE Estado = 'Pendiente';

    -- Contar Número de Clientes
    SELECT @NumClientes = COUNT(*)
    FROM Clientes;

    -- Contar Deudas Pendientes
    SELECT @DeudasPendientes = COUNT(*)
    FROM Deudas
    WHERE Estado = 'Pendiente';

    -- Devolver los resultados
    SELECT @MontoPagado AS 'MontoPagado',
           @DeudaTotal AS 'DeudaTotal',
           @NumClientes AS 'NúmerodeClientes',
           @DeudasPendientes AS 'DeudasPendientes';
END;
GO
/****** Object:  StoredProcedure [dbo].[SumarDeudasPorNivel]    Script Date: 1/05/2024 20:59:09 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SumarDeudasPorNivel]
AS
BEGIN
    DECLARE @sumaAlCorriente DECIMAL(10,2);
	DECLARE @sumaProximo DECIMAL(10,2);
	DECLARE @sumaPorVencer DECIMAL(10,2);
	DECLARE @sumaVencidos DECIMAL(10,2);
	DECLARE @sumaAlerta DECIMAL(10,2);

	-- Calcular Deuda Corriente
	SELECT @sumaAlCorriente = SUM(Monto)
    FROM Deudas
    WHERE Nivel = 'Al Corriente' AND Estado = 'Pendiente';

	-- Calcular Deuda Proximo
	SELECT @sumaProximo = SUM(Monto)
    FROM Deudas
    WHERE Nivel = 'Próximos' AND Estado = 'Pendiente';

	-- Calcular Deuda Por Vencer
	SELECT @sumaPorVencer = SUM(Monto)
    FROM Deudas
    WHERE Nivel = 'PorVencer' AND Estado = 'Pendiente';

	-- Calcular Deuda Vencidos
	SELECT @sumaVencidos = SUM(Monto)
    FROM Deudas
    WHERE Nivel = 'Vencido' AND Estado = 'Pendiente';

	-- Calcular Deuda Alerta
	SELECT @sumaAlerta = SUM(Monto)
    FROM Deudas
    WHERE Nivel = 'Alerta' AND Estado = 'Pendiente';

    -- Devolver los resultados
    SELECT @sumaAlCorriente AS 'AlCorriente',
           @sumaProximo AS 'Proximo',
           @sumaPorVencer AS 'PorVencer',
           @sumaVencidos AS 'Vencidos',
		   @sumaAlerta AS 'Alerta';
END;
GO
