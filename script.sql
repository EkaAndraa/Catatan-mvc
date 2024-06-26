CREATE TABLE Catatan_tbl (
  id INT AUTO_INCREMENT PRIMARY KEY,
  topic VARCHAR(255) NOT NULL,
  Catatan TEXT NOT NULL,
  is_done TINYINT(1) NOT NULL DEFAULT 0,
  add_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO Catatan_tbl (topic, Catatan, is_done, add_date) VALUES (?, ?, ?, ?);

UPDATE Catatan_tbl SET topic = ?, Catatan = ? WHERE id = ?;

DELETE FROM Catatan_tbl WHERE id = ?;
