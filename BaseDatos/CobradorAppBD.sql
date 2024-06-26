USE [master]
GO
/****** Object:  Database [cobradorapp]    Script Date: 25/04/2024 22:54:25 ******/
CREATE DATABASE [cobradorapp]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'cobradorapp', FILENAME = N'C:\SQLData\cobradorapp.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'cobradorapp_log', FILENAME = N'C:\SQLData\cobradorapp_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT, LEDGER = OFF
GO
ALTER DATABASE [cobradorapp] SET COMPATIBILITY_LEVEL = 160
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [cobradorapp].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [cobradorapp] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [cobradorapp] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [cobradorapp] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [cobradorapp] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [cobradorapp] SET ARITHABORT OFF 
GO
ALTER DATABASE [cobradorapp] SET AUTO_CLOSE ON 
GO
ALTER DATABASE [cobradorapp] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [cobradorapp] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [cobradorapp] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [cobradorapp] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [cobradorapp] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [cobradorapp] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [cobradorapp] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [cobradorapp] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [cobradorapp] SET  ENABLE_BROKER 
GO
ALTER DATABASE [cobradorapp] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [cobradorapp] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [cobradorapp] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [cobradorapp] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [cobradorapp] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [cobradorapp] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [cobradorapp] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [cobradorapp] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [cobradorapp] SET  MULTI_USER 
GO
ALTER DATABASE [cobradorapp] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [cobradorapp] SET DB_CHAINING OFF 
GO
ALTER DATABASE [cobradorapp] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [cobradorapp] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [cobradorapp] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [cobradorapp] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
ALTER DATABASE [cobradorapp] SET QUERY_STORE = ON
GO
ALTER DATABASE [cobradorapp] SET QUERY_STORE (OPERATION_MODE = READ_WRITE, CLEANUP_POLICY = (STALE_QUERY_THRESHOLD_DAYS = 30), DATA_FLUSH_INTERVAL_SECONDS = 900, INTERVAL_LENGTH_MINUTES = 60, MAX_STORAGE_SIZE_MB = 1000, QUERY_CAPTURE_MODE = AUTO, SIZE_BASED_CLEANUP_MODE = AUTO, MAX_PLANS_PER_QUERY = 200, WAIT_STATS_CAPTURE_MODE = ON)
GO
USE [cobradorapp]
GO
/****** Object:  Table [dbo].[Clientes]    Script Date: 25/04/2024 22:54:25 ******/
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
/****** Object:  Table [dbo].[Deudas]    Script Date: 25/04/2024 22:54:26 ******/
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
/****** Object:  StoredProcedure [dbo].[ActualizarNivelDeuda]    Script Date: 25/04/2024 22:54:26 ******/
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
/****** Object:  StoredProcedure [dbo].[ObtenerDatosClientesDeudas]    Script Date: 25/04/2024 22:54:26 ******/
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
/****** Object:  StoredProcedure [dbo].[SumarDeudasPorNivel]    Script Date: 25/04/2024 22:54:26 ******/
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
USE [master]
GO
ALTER DATABASE [cobradorapp] SET  READ_WRITE 
GO
