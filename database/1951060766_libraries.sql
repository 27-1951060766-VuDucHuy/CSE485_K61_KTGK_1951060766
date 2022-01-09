
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `DocGia` (
  `bd_madg` int(5) NOT NULL,
  `bd_hovaten` varchar(50) NOT NULL,
  `bd_gioitinh` varchar(10) NOT NULL,
  `bd_namsinh` int(20) NOT NULL,
  `bd_nghenghiep` varchar(10) NOT NULL,
  `bd_ngaycapthe` varchar(20) NOT NULL,
  `bd_ngayhethan` varchar(20) NOT NULL,
  `bd_diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `DocGia` (`bd_madg`, `bd_hovaten`, `bd_gioitinh`, `bd_namsinh`, `bd_nghenghiep`, `bd_ngaycapthe`, `bd_ngayhethan`,`bd_diachi`) VALUES
(1, 'Vũ Đức Huy', 'Nam', '2001-03-06', 'Sinh Viên', '2020-10-01', '2025-10-01','Tổ 4 Mai Động'),
(5, ' Nguyễn Đức', ' Nam ', '1999-08-09', 'Sinh Viên', '2019-05-06', '2024-05-06','Quận Hai Bà Trưng');

ALTER TABLE `DOCGIA`
  ADD PRIMARY KEY (`bd_madg`);


ALTER TABLE `DOCGIA`
  MODIFY `bd_madg` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

