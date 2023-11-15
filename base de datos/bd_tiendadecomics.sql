SET AUTOCOMMIT = 0;
use bd_tiendadecomics;

CREATE TABLE proveedor(
idproveedor INT(11),
nomproveedor VARCHAR(50) NOT NULL,
apellidosprov VARCHAR(50) NOT NULL,
telefono int(15) NOT NULL,
emailproveedor VARCHAR(50) NOT NULL,
direccion VARCHAR(100) NOT NULL,
sexo VARCHAR(14) NOT NULL,
tipocomics VARCHAR(200) NOT NULL
);
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idproveedor`),
  ADD UNIQUE KEY `idproveedor` (`idproveedor`);
  
ALTER TABLE `proveedor`
  MODIFY `idproveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

DESCRIBE proveedor;