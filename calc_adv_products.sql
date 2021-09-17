-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 17 2021 г., 19:01
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `calc_adv_products`
--

-- --------------------------------------------------------

--
-- Структура таблицы `adv_prod_types`
--

CREATE TABLE `adv_prod_types` (
  `id` int NOT NULL,
  `title` varchar(145) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `adv_prod_types`
--

INSERT INTO `adv_prod_types` (`id`, `title`, `description`) VALUES
(1, 'Баннер', 'Баннер (англ. banner — флаг, транспарант) — графическое изображение рекламного характера. Баннеры размещают для привлечения клиентов, для информирования или для создания позитивного имиджа.');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'Администратор', NULL, NULL, 1631721400, 1631721400),
('manager', 1, 'Менеджер', NULL, NULL, 1631721400, 1631721400);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `calculations`
--

CREATE TABLE `calculations` (
  `id` int NOT NULL,
  `calculationcol` varchar(45) DEFAULT NULL,
  `adv_prod_type_id` int NOT NULL,
  `product_length` int DEFAULT NULL,
  `product_width` int DEFAULT NULL,
  `product_height` int DEFAULT NULL,
  `product_quantity` int DEFAULT NULL,
  `color_id` int DEFAULT NULL,
  `cost` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `calculations`
--

INSERT INTO `calculations` (`id`, `calculationcol`, `adv_prod_type_id`, `product_length`, `product_width`, `product_height`, `product_quantity`, `color_id`, `cost`) VALUES
(1, 'Расчет стоимости баннера 2х4', 1, 4, NULL, 2, 1, NULL, 6200),
(2, 'Расчет стоимости баннера 2х3', 1, 5, NULL, 6, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `calculation_has_material`
--

CREATE TABLE `calculation_has_material` (
  `id` int NOT NULL,
  `calculation_id` int NOT NULL,
  `material_id` int NOT NULL,
  `material_count` int DEFAULT NULL,
  `material_length` int DEFAULT NULL,
  `material_width` int DEFAULT NULL,
  `material_height` int DEFAULT NULL,
  `color_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `calculation_has_material`
--

INSERT INTO `calculation_has_material` (`id`, `calculation_id`, `material_id`, `material_count`, `material_length`, `material_width`, `material_height`, `color_id`) VALUES
(1, 1, 1, 1, 2, NULL, 3, 1),
(2, 1, 2, 1, 1, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `colors`
--

CREATE TABLE `colors` (
  `id` int NOT NULL,
  `color` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `colors`
--

INSERT INTO `colors` (`id`, `color`) VALUES
(1, 'Красный'),
(2, 'Зеленый'),
(3, 'Желтый');

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `id` int NOT NULL,
  `fullname` varchar(45) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phonenumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `email`, `phonenumber`) VALUES
(1, 'Иванов Иван Иванович', 'ivanov@gmail.com', '89898955');

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE `employees` (
  `id` int NOT NULL,
  `fullname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phonenumber` varchar(20) DEFAULT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `fullname`, `email`, `phonenumber`, `user_id`) VALUES
(1, 'Петров Олег Иванович', 'petrov@gmail.com', '7898989', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `materials`
--

CREATE TABLE `materials` (
  `id` int NOT NULL,
  `materialtitle` varchar(85) DEFAULT NULL,
  `materialcost` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `materials`
--

INSERT INTO `materials` (`id`, `materialtitle`, `materialcost`) VALUES
(1, 'Пенопласт, 200мм', 200),
(2, 'ПВХ листовой, винипласт 10мм', 5000);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1631718591),
('m140506_102106_rbac_init', 1631721167),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1631721167),
('m180523_151638_rbac_updates_indexes_without_prefix', 1631721167),
('m200409_110543_rbac_update_mssql_trigger', 1631721167),
('m210915_150720_create_users_table', 1631718872);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `orderdate` date DEFAULT NULL,
  `ordercol` varchar(45) DEFAULT NULL,
  `calculation_id` int NOT NULL,
  `employees_id` int NOT NULL,
  `customer_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `orderdate`, `ordercol`, `calculation_id`, `employees_id`, `customer_id`) VALUES
(1, '2021-09-17', 'Заказ 1', 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `price_list`
--

CREATE TABLE `price_list` (
  `id` int NOT NULL,
  `item_name` varchar(80) DEFAULT NULL,
  `cost` int DEFAULT NULL,
  `adv_prod_type_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `price_list`
--

INSERT INTO `price_list` (`id`, `item_name`, `cost`, `adv_prod_type_id`) VALUES
(1, 'Баннер 2Х2', 4000, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `userroles`
--

CREATE TABLE `userroles` (
  `role_id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'rnjrb6lBVkvJU-9_ZNo8Ejg-aUGCLpsr', '$2y$13$1HcpZuH.EvPOqR2FegwyFu46/RQxEHxh.QsE6ZrWV8cfABMYmUzUG', NULL, 'mokruy9999@gmail.com', 10, 1631719681, 1631719681);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `adv_prod_types`
--
ALTER TABLE `adv_prod_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `calculations`
--
ALTER TABLE `calculations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_calculation_adv_prod_type_idx` (`adv_prod_type_id`),
  ADD KEY `fk_calculation_colors1_idx` (`color_id`);

--
-- Индексы таблицы `calculation_has_material`
--
ALTER TABLE `calculation_has_material`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_calculation_has_material_material1_idx` (`material_id`),
  ADD KEY `fk_calculation_has_material_calculation1_idx` (`calculation_id`),
  ADD KEY `fk_calculation_has_material_colors1_idx` (`color_id`);

--
-- Индексы таблицы `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_employees_users1_idx` (`user_id`);

--
-- Индексы таблицы `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orders_calculation1_idx` (`calculation_id`),
  ADD KEY `fk_orders_employees1_idx` (`employees_id`),
  ADD KEY `fk_orders_customer1_idx` (`customer_id`);

--
-- Индексы таблицы `price_list`
--
ALTER TABLE `price_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_price_list_adv_prod_type1_idx` (`adv_prod_type_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `userroles`
--
ALTER TABLE `userroles`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `fk_userroles_roles1_idx` (`role_id`),
  ADD KEY `fk_userroles_users1_idx` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `adv_prod_types`
--
ALTER TABLE `adv_prod_types`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `calculations`
--
ALTER TABLE `calculations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `calculation_has_material`
--
ALTER TABLE `calculation_has_material`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `price_list`
--
ALTER TABLE `price_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `calculations`
--
ALTER TABLE `calculations`
  ADD CONSTRAINT `fk_calculation_adv_prod_type` FOREIGN KEY (`adv_prod_type_id`) REFERENCES `adv_prod_types` (`id`),
  ADD CONSTRAINT `fk_calculation_colors1` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`);

--
-- Ограничения внешнего ключа таблицы `calculation_has_material`
--
ALTER TABLE `calculation_has_material`
  ADD CONSTRAINT `fk_calculation_has_material_calculation1` FOREIGN KEY (`calculation_id`) REFERENCES `calculations` (`id`),
  ADD CONSTRAINT `fk_calculation_has_material_colors1` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`),
  ADD CONSTRAINT `fk_calculation_has_material_material1` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`);

--
-- Ограничения внешнего ключа таблицы `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `fk_employees_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_calculation1` FOREIGN KEY (`calculation_id`) REFERENCES `calculations` (`id`),
  ADD CONSTRAINT `fk_orders_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `fk_orders_employees1` FOREIGN KEY (`employees_id`) REFERENCES `employees` (`id`);

--
-- Ограничения внешнего ключа таблицы `price_list`
--
ALTER TABLE `price_list`
  ADD CONSTRAINT `fk_price_list_adv_prod_type1` FOREIGN KEY (`adv_prod_type_id`) REFERENCES `adv_prod_types` (`id`);

--
-- Ограничения внешнего ключа таблицы `userroles`
--
ALTER TABLE `userroles`
  ADD CONSTRAINT `fk_userroles_roles1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `fk_userroles_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
