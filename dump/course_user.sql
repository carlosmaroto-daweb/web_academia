SET NAMES 'utf8';
SET CHARACTER SET utf8;

CREATE TABLE `course_user` (
  `id_course` INT NOT NULL,
  `id_user` INT NOT NULL,
  PRIMARY KEY (`id_course`, `id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;