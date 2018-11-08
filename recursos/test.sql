/* valores enteros a la fecha*/
set @aLaFechaReusado = (select sum(actualReusado) from actualLdcs where idUsuario= 3);
set @varUno = (select actualTotal from actualLdcs where idUsuario = 3 order by id asc limit 1);
set @varDos = (select actualNyC from actualLdcs where idUsuario = 3 order by id desc limit 1);
set @aLaFechaNyC = (@VarUno + @varDos);    
set @alaFecha = (select actualNyC from actualLdcs where idUsuario = 3 order by id limit 1);           
set @aLaFechaTotal = @aLaFechaReusado + @aLaFechaNyC;

/* porcentaje de los valores enteros a la fecha*/
set @paLaFechaReusado = (@aLaFechaReusado * 100) /@aLaFechaTotal;
set @paLaFechaNyC = (@aLaFechaNyC * 100) / @aLaFechaTotal;
set @paLaFechaTotal = (@paLaFechaReusado + @paLaFechaNyC);

/* cadena de inserción a la tabla tamFavgs */ 
insert into tamFavgs values(
4,3,3, @aLaFechaReusado,@aLaFechaNyC,@aLaFechaTotal,@paLaFechaReusado,@paLaFechaNyC,@paLaFechaTotal
);