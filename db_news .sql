-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 05 2023 г., 16:23
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about_info`
--

CREATE TABLE `about_info` (
  `b_id` int(11) NOT NULL,
  `b_title` varchar(255) NOT NULL,
  `b_description` longtext NOT NULL,
  `b_date` varchar(255) NOT NULL,
  `b_category` varchar(255) NOT NULL,
  `b_status` varchar(255) NOT NULL,
  `b_img` varchar(255) NOT NULL,
  `b_img_ext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `about_info`
--

INSERT INTO `about_info` (`b_id`, `b_title`, `b_description`, `b_date`, `b_category`, `b_status`, `b_img`, `b_img_ext`) VALUES
(1, 'ff', 'ff', '2023-11-03', 'Web Desing', 'Active', '', ''),
(2, 'DESDC2', 'DESDC2', '2023-10-14', 'Web Desing', 'Active', 'avatar-1295397_12808.png', '.png'),
(3, 'DESC3', 'DESC3', '2023-10-26', 'Craphic Design', 'Active', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `category`) VALUES
(10, 'vaqif', 'vako', 'fcea920f7412b5da7be0cf42b8c93759', ''),
(11, 'vusal', 'vusal', '25f9e794323b453885f5181f1b624d0b', ''),
(12, 'resad', 'resad', '20eabe5d64b0e216796e834f52d61fd0b70332fc', ''),
(13, 'cavid', 'cavid', '827ccb0eea8a706c4c34a16891f84e7b', '');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`) VALUES
(1, 'Web Design'),
(2, 'Graphic Design'),
(3, 'Video Editing'),
(4, 'Online Marketing');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_title` varchar(255) NOT NULL,
  `n_title_ru` varchar(255) NOT NULL,
  `n_description` longtext NOT NULL,
  `n_date` varchar(255) NOT NULL,
  `n_category` varchar(255) NOT NULL,
  `n_status` varchar(255) NOT NULL,
  `n_img` varchar(255) NOT NULL,
  `n_img_ext` varchar(255) NOT NULL,
  `n_creater_id` int(11) NOT NULL,
  `n_creater_date` varchar(255) NOT NULL,
  `n_updater_id` varchar(255) NOT NULL,
  `n_update_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`n_id`, `n_title`, `n_title_ru`, `n_description`, `n_date`, `n_category`, `n_status`, `n_img`, `n_img_ext`, `n_creater_id`, `n_creater_date`, `n_updater_id`, `n_update_date`) VALUES
(69, 'Today', 'Сегодня', 't', '2023-08-26', 'Craphic', 'Active', '', '', 0, '', '', ''),
(70, 'gr', '', 'rgr', '2023-09-22', 'Web', 'Active', '', '', 0, '', '', ''),
(71, 'Abdul', '', 'zavtra yedet vmoskvu', '2023-09-02', 'Online', 'Active', 'pexels-piccinng-3075993.jpg', '.jpg', 0, '', '', ''),
(72, 'ii', '', 'ii', '2023-09-29', 'Web', 'Active', '', '', 0, '', '', ''),
(73, 'Biz insanlara onlayn təhsildə  kömək edirik', 'Сегодня', 'sadə proses kurs və &uuml;nsiyyət', '2023-09-07', 'Craphic', 'Active', '', '', 0, '', '', ''),
(74, 'Biz insanlara onlayn təhsildə  kömək edirik', 'Сегодня', 'as much of the coursework', '2023-09-14', 'Video', 'Deactive', '', '', 0, '', '', ''),
(75, 'Təhsil haqqında düşüncə tərzinizi dəyişdirin', 'Сегодня', '&nbsp;onlayn təhsil gələcəkdir', '2023-09-28', 'Craphic', 'Deactive', '', '', 0, '', '', ''),
(76, 'Biz insanlara onlayn təhsildə  kömək edirik', 'Сегодня', 'Evinizdən Onlayn Təhsil Alın', '2023-09-20', 'Web', 'Active', 'pexels-piccinng-30759931.jpg', '.jpg', 0, '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_information`
--

CREATE TABLE `personal_information` (
  `pinfo_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `pob` varchar(100) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `cstatus` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `photo` text NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `personal_information`
--

INSERT INTO `personal_information` (`pinfo_id`, `user_id`, `dob`, `pob`, `gender`, `cstatus`, `email`, `contact_no`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 42, '', '', '', '', '', '', 'avatar-1295397_12801.png', 'active', '2023-09-07 21:10:58', '2023-09-07 22:53:24'),
(2, 43, '', '', '', '', '', '', 'avatar-1295397_12807.png', 'active', '2023-09-07 22:53:46', '2023-09-07 22:53:54'),
(3, 44, '', '', '', '', '', '', 'pexels-piccinng-307599311.jpg', 'active', '2023-09-07 22:54:33', '2023-09-07 22:54:37'),
(4, 3, '2023-09-27', 'sheki', 'Male', 'Single', 'vako_95@inbox.ru', '0506732059', 'avatar-1295397_12801.png', 'active', '2023-09-07 22:55:06', '2023-09-08 00:26:45'),
(5, 45, '2023-09-01', '4r4', '4r4', '4r4', '4r4', '4', 'avatar-659651_640.png', 'active', '2023-09-11 09:59:27', '2023-09-11 23:43:12'),
(6, 41, '2023-09-22', 'sheki', 'male', 'single', 'vako', '050d', 'pexels-piccinng-3075993.jpg', 'active', '2023-09-11 22:13:37', '2023-09-11 22:24:25');

-- --------------------------------------------------------

--
-- Структура таблицы `popular_courses`
--

CREATE TABLE `popular_courses` (
  `p_id` int(10) NOT NULL,
  `p_title` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `p_description` longtext NOT NULL,
  `p_date` varchar(255) NOT NULL,
  `p_category` varchar(255) NOT NULL,
  `p_status` varchar(255) NOT NULL DEFAULT 'active',
  `p_img` varchar(255) NOT NULL,
  `p_img_ext` varchar(2555) NOT NULL,
  `p_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `p_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `p_name` varchar(255) NOT NULL,
  `p_student` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `popular_courses`
--

INSERT INTO `popular_courses` (`p_id`, `p_title`, `p_price`, `p_description`, `p_date`, `p_category`, `p_status`, `p_img`, `p_img_ext`, `p_created_at`, `p_updated_at`, `p_name`, `p_student`) VALUES
(2, '444nhh', '', '5555', '2023-10-19', 'Web', 'Deactive', '', '', '2023-10-14 13:48:56', '2023-10-14 13:58:25', '', ''),
(3, 'ii', '', 'ii', '2023-10-19', 'Web Desing', 'Active', '', '', '2023-10-14 14:42:48', '2023-10-14 14:42:48', '', ''),
(4, 'ee', 'ee', 'ee', '2023-10-18', 'Web Desing', 'Deactive', '', '', '2023-10-14 14:47:47', '2023-10-14 14:47:47', '', ''),
(5, '14', '12 $', '14', '2023-10-21', 'Craphic Design', 'Active', '', '', '2023-10-14 14:48:45', '2023-10-14 14:48:45', '', ''),
(6, 'ttt', '12 111 $', 'ttt', '2023-10-19', 'Web Desing', 'Active', '', '', '2023-10-14 14:50:56', '2023-10-14 14:50:56', '', ''),
(7, 'stude4n', '445 $', '10', '2023-10-27', 'Web Desing', 'Deactive', '', '', '2023-10-14 15:21:41', '2023-10-14 15:21:41', '', '10'),
(8, 'ee', '42 $', 'students', '2023-10-20', 'Web', 'Active', 'avatar-1295397_12809.png', '.png', '2023-10-14 15:26:33', '2023-10-14 17:22:38', 'Vako', '12');

-- --------------------------------------------------------

--
-- Структура таблицы `programming_skills`
--

CREATE TABLE `programming_skills` (
  `pskill_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `prog_languages` text NOT NULL,
  `backend_frameworks` text NOT NULL,
  `frontend_frameworks` text NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `programming_skills`
--

INSERT INTO `programming_skills` (`pskill_id`, `user_id`, `prog_languages`, `backend_frameworks`, `frontend_frameworks`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Php, HTML, Css, Bootstrap.', 'Codeignigter.', 'Bootsrap, Materilaze, Foundation.', 'active', '2023-09-04 00:11:28', '2023-09-04 00:18:16');

-- --------------------------------------------------------

--
-- Структура таблицы `skilled_info`
--

CREATE TABLE `skilled_info` (
  `s_id` int(11) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_description` longtext NOT NULL,
  `s_date` varchar(255) NOT NULL,
  `s_category` varchar(255) NOT NULL,
  `s_status` varchar(255) NOT NULL,
  `s_img` varchar(255) NOT NULL,
  `s_img_ext` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `skilled_info`
--

INSERT INTO `skilled_info` (`s_id`, `s_title`, `s_description`, `s_date`, `s_category`, `s_status`, `s_img`, `s_img_ext`) VALUES
(11, 'sekiler', 'sekil', '2023-10-20', 'Web', 'Deactive', '', ''),
(12, '3info', '3info', '2023-10-02', 'Craphic Design', 'Active', '116462.png', '.png'),
(13, '4info', '3info', '2023-10-25', 'Video Editing', 'Active', '', ''),
(14, 'last', 'last', '2023-10-27', 'Web Desing', 'Active', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `xname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `fname`, `mname`, `lname`, `xname`, `username`, `password`, `role`, `status`, `created_at`, `updated_at`) VALUES
(52, 't', 't', 't', '', 't', 'c20ad4d76fe97759aa27a0c99bff6710', 'manager', 'active', '2023-09-14 06:32:06', '2023-09-19 19:02:58'),
(53, 'vako', 'vako', 'huseynov', '', 'miband.az', '202cb962ac59075b964b07152d234b70', 'admin', 'active', '2023-09-14 06:50:25', '2023-09-14 13:33:10'),
(54, 'vako', 'vako', 'huseynov', '', 'vako01', '202cb962ac59075b964b07152d234b70', 'admin', 'deactivated', '2023-09-14 06:51:06', '2023-09-14 09:58:38'),
(55, 'vako', 'Huseynov', 'huseynov', '', 'raymond', '202cb962ac59075b964b07152d234b70', 'admin', 'deactivated', '2023-09-14 06:53:17', '2023-09-14 10:02:40'),
(56, 'vako', '123', '123', '', 'ellay', '202cb962ac59075b964b07152d234b70', 'admin', 'deactivated', '2023-09-14 07:03:44', '2023-09-14 10:02:21'),
(57, '77', '77', '77', '', '77', '28dd2c7955ce926456240b2ff0100bde', 'manager', 'deactivated', '2023-09-14 07:04:38', '2023-09-14 09:58:58'),
(58, 'vako', 'vako', 'vako', '', 'vako', '202cb962ac59075b964b07152d234b70', 'admin', 'deactivated', '2023-09-14 10:27:50', '2023-09-14 10:28:06'),
(59, 'vako25', 'vako25', 'huseynov25', '', 'vako01', '202cb962ac59075b964b07152d234b70', 'manager', 'active', '2023-09-14 10:29:19', '2023-09-17 10:43:50'),
(60, 'vako', 'vako', 'huseynov', '', 'resad', '202cb962ac59075b964b07152d234b70', 'manager', 'deactivated', '2023-09-14 10:33:15', '2023-09-14 10:33:34'),
(61, 'vako', 'vako', 'cd', '', 'gggg', 'ba248c985ace94863880921d8900c53f', 'admin', 'active', '2023-09-14 10:52:21', '2023-09-14 10:59:06'),
(62, 'Abdul', 'abdul', 'abdul', 'y6y6', 'abdul', '202cb962ac59075b964b07152d234b70', 'visitor', 'active', '2023-09-14 11:10:31', '2023-09-14 11:15:16'),
(63, 'ella', 'ella', 'ella', 'ella', 'ella', '202cb962ac59075b964b07152d234b70', 'visitor', 'active', '2023-09-14 11:14:09', '2023-09-14 11:14:09'),
(64, 'Valeriya', 'Lera', 'Lera', '', 'lera', '202cb962ac59075b964b07152d234b70', 'visitor', 'active', '2023-09-19 19:00:34', '2023-09-19 19:00:34'),
(65, 'Valeriya', 'Lera', 'Lera', '', 'Lera_@mail.ru', '202cb962ac59075b964b07152d234b70', 'admin', 'active', '2023-09-19 19:02:25', '2023-09-19 19:02:25');

-- --------------------------------------------------------

--
-- Структура таблицы `user_message`
--

CREATE TABLE `user_message` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_subject` varchar(255) NOT NULL,
  `u_message` longtext NOT NULL,
  `u_date` varchar(255) NOT NULL,
  `u_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user_message`
--

INSERT INTO `user_message` (`u_id`, `u_name`, `u_email`, `u_subject`, `u_message`, `u_date`, `u_created`) VALUES
(1, 'Pervane', 'vako_95@inbox.ru', 'it', 'rtrt', '2023-09-18 19:44:45', '2023-09-18 15:46:05'),
(2, 'street', 'vako_95@inbox.ru', 'yellow', 'today', '2023-09-18 19:46:45', '2023-09-18 15:46:45'),
(3, 'street', 'vako_95@inbox.ru', 'yellow', 'today', '2023-09-18 19:47:43', '2023-09-18 15:47:43'),
(4, 'develop', 'vako_95@inbox.ru', 'it', '12', '2023-09-18 23:35:57', '2023-09-18 19:35:57'),
(5, 'rr', 'vako_95@inbox.ru', 'rr', 'rr', '2023-09-18 23:42:20', '2023-09-18 19:42:20'),
(6, 'develop', 'vako_95@inbox.ru', 'hdd', 'd', '2023-09-18 23:42:52', '2023-09-18 19:42:52'),
(7, 'kk', 'vako_95@inbox.ru', 'kk', 'kk', '2023-09-18 23:43:39', '2023-09-18 19:43:39'),
(8, 'd', 'vako_95@inbox.ru', 'd', 'd', '2023-09-18 23:44:02', '2023-09-18 19:44:02'),
(9, 'e', 'vako_95@inbox.ru', 'e', 'e', '2023-09-18 23:46:56', '2023-09-18 19:46:56'),
(10, 's', 'vako_95@inbox.ru', 's', 's', '2023-09-18 23:47:12', '2023-09-18 19:47:12'),
(11, 'w', 'vako_95@inbox.ru', 'w', 'w', '2023-09-18 23:47:34', '2023-09-18 19:47:34'),
(12, 'i', 'vako_95@inbox.ru', 'i', 'i', '2023-09-18 23:49:09', '2023-09-18 19:49:09'),
(13, 'e', 'vako_95@inbox.ru', 'e', 'e', '2023-09-18 23:50:07', '2023-09-18 19:50:07'),
(14, 't', 'vako_95@inbox.ru', 't', 't', '2023-09-18 23:50:18', '2023-09-18 19:50:18'),
(15, 'd', 'vako_95@inbox.ru', 'd', 'd', '2023-09-18 23:50:56', '2023-09-18 19:50:56'),
(16, 's', 'vako_95@inbox.ru', 's', 's', '2023-09-18 23:51:16', '2023-09-18 19:51:16'),
(19, 'uu', 'vako_95@inbox.ru', 'uu', 'uu', '2023-10-02  04:54:01', '2023-10-02 00:54:01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about_info`
--
ALTER TABLE `about_info`
  ADD PRIMARY KEY (`b_id`);

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Индексы таблицы `personal_information`
--
ALTER TABLE `personal_information`
  ADD PRIMARY KEY (`pinfo_id`);

--
-- Индексы таблицы `popular_courses`
--
ALTER TABLE `popular_courses`
  ADD PRIMARY KEY (`p_id`);

--
-- Индексы таблицы `programming_skills`
--
ALTER TABLE `programming_skills`
  ADD PRIMARY KEY (`pskill_id`);

--
-- Индексы таблицы `skilled_info`
--
ALTER TABLE `skilled_info`
  ADD PRIMARY KEY (`s_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `user_message`
--
ALTER TABLE `user_message`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about_info`
--
ALTER TABLE `about_info`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT для таблицы `personal_information`
--
ALTER TABLE `personal_information`
  MODIFY `pinfo_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `popular_courses`
--
ALTER TABLE `popular_courses`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `programming_skills`
--
ALTER TABLE `programming_skills`
  MODIFY `pskill_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `skilled_info`
--
ALTER TABLE `skilled_info`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT для таблицы `user_message`
--
ALTER TABLE `user_message`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
