
-- DROP DATABASE example_products;
-- CREATE DATABASE example_products;


-- DROP TABLE IF EXISTS `products_components_table`;
-- DROP TABLE IF EXISTS `products_table`;

CREATE TABLE IF NOT EXISTS `products_table` (
    `id` int(11) NOT NULL,
    `name` varchar(255) DEFAULT NULL,
    `price` int(11) DEFAULT NULL
    ) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `products_components_table` (
    `productId` int(11) DEFAULT NULL,
    `componentId` int(11) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `products_table` (`id`, `name`, `price`) VALUES
                                                         (1, 'Milk', '10'),
                                                         (2, 'Bread', '20'),
                                                         (3, 'Oil', '30'),
                                                         (4, 'Potato', '40'),
                                                         (5, 'Eggs', '50'),
                                                         (6, 'Carot', '60');



INSERT INTO `products_components_table` (`productId`, `componentId`) VALUES
                                                                         (1, 2),
                                                                         (2, 1),
                                                                         (3, 4),
                                                                         (4, 3),
                                                                         (1, 5),
                                                                         (5, 1),
                                                                         (1, 6),
                                                                         (6, 1),
                                                                         (2, 5),
                                                                         (5, 2),
                                                                         (2, 6),
                                                                         (6, 2),
                                                                         (5, 6),
                                                                         (6, 5);


ALTER TABLE `products_components_table`
        ADD KEY `FK_products_components_table_productId`    (`productId`),
        ADD KEY `FK_products_components_table_componentId`  (`componentId`);

ALTER TABLE `products_table`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `products_table`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;

ALTER TABLE `products_components_table`
    ADD CONSTRAINT `FK_products_components_table_productId` FOREIGN KEY (`productId`) REFERENCES `products_table` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT `FK_products_components_table_componentId` FOREIGN KEY (`componentId`) REFERENCES `products_table` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

