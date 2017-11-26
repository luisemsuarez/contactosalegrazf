CREATE TABLE contactosalegra (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    nombre VARCHAR(32) NOT NULL,
    identificacion VARCHAR(32) NOT NULL,
    email VARCHAR(32),
    telefono1 VARCHAR(32),
    telefono2 VARCHAR(32),
    fax VARCHAR(32),
	celular VARCHAR(32),
	observaciones VARCHAR(32),
	tipo VARCHAR(1),
	direccion VARCHAR(32),
	vendedor VARCHAR(32),
	terminospago VARCHAR(32),
	listaprecio VARCHAR(32),
	internalContacs VARCHAR(32)
);

CREATE INDEX "id" ON "contactosalegra" ("id");