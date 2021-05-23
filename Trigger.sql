/*CREATE TABLE Logs(
	logsId		INT IDENTITY(1,1),
	logsUser	NVARCHAR(50),
	logsDate	DATE,
	logsAccion	NVARCHAR(300)
); */
CREATE TRIGGER [dbo].[Historial] ON [dbo].[Usuario]
   AFTER INSERT
AS 
BEGIN
	DECLARE @usrUsrname NVARCHAR(45);
	DECLARE @usrEmail NVARCHAR(45);
	
	SELECT @usrUsrname = Usuario.usrNomUsr	FROM inserted Usuario;
	SELECT @usrEmail = Usuario.usrCorreo		FROM inserted Usuario;

	
   DECLARE @data XML = EVENTDATA() 
   DECLARE @eventType nvarchar(100)= CONCAT ('EVENT: ',@data.value('(/EVENT_INSTANCE/EventType)[1]', 'nvarchar(100)'),+ CHAR(13))
   DECLARE @TsqlCommand nvarchar(2000)=CONCAT('COMMAND:   ',@data.value('(/EVENT_INSTANCE/TSQLCommand)[1]', 'nvarchar(2000)'))
   DECLARE @BodyMsg nvarchar(2100)=CONCAT(@eventType,@TsqlCommand)
 
   EXEC msdb.dbo.sp_send_dbmail  
   @profile_name = 'BeeCare',  
   @recipients = 'aggm123@icloud.com',  
   @body =@BodyMsg,
   @subject = 'Se registró un nuevo usuario.';

	INSERT INTO Logs(logsUser, logsDate, logsAccion) VALUES (
		CURRENT_USER,
		CURRENT_TIMESTAMP,
		@usrUsrname+' : '+@usrEmail
	);
END
GO