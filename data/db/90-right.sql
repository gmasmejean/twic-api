INSERT IGNORE INTO `permission` (`libelle`) VALUES ('conversation.create');
INSERT IGNORE INTO `role_permission` (`role_id`, `permission_id`) VALUES (4, 
(SELECT `id` FROM `permission` WHERE `libelle`= 'conversation.create'));

INSERT IGNORE INTO `permission` (`libelle`) VALUES ('conversation.get');
INSERT IGNORE INTO `role_permission` (`role_id`, `permission_id`) VALUES (4, 
(SELECT `id` FROM `permission` WHERE `libelle`= 'conversation.get'));


INSERT IGNORE INTO `permission` (`libelle`) VALUES ('conversation.addTextEditor');
INSERT IGNORE INTO `role_permission` (`role_id`, `permission_id`) VALUES (4, 
(SELECT `id` FROM `permission` WHERE `libelle`= 'conversation.addTextEditor'));


INSERT IGNORE INTO `permission` (`libelle`) VALUES ('conversation.addConversation');
INSERT IGNORE INTO `role_permission` (`role_id`, `permission_id`) VALUES (4, 
(SELECT `id` FROM `permission` WHERE `libelle`= 'conversation.addConversation'));


INSERT IGNORE INTO `permission` (`libelle`) VALUES ('conversation.addWhiteboard');
INSERT IGNORE INTO `role_permission` (`role_id`, `permission_id`) VALUES (4, 
(SELECT `id` FROM `permission` WHERE `libelle`= 'conversation.addWhiteboard'));


INSERT IGNORE INTO `permission` (`libelle`) VALUES ('conversation.addDocument');
INSERT IGNORE INTO `role_permission` (`role_id`, `permission_id`) VALUES (4, 
(SELECT `id` FROM `permission` WHERE `libelle`= 'conversation.addDocument'));




/*
**************************************************
*/

INSERT IGNORE INTO `permission` (`libelle`) VALUES ('conversation.removeTextEditor');
INSERT IGNORE INTO `role_permission` (`role_id`, `permission_id`) VALUES (4, 
(SELECT `id` FROM `permission` WHERE `libelle`= 'conversation.removeTextEditor'));


INSERT IGNORE INTO `permission` (`libelle`) VALUES ('conversation.removeConversation');
INSERT IGNORE INTO `role_permission` (`role_id`, `permission_id`) VALUES (4, 
(SELECT `id` FROM `permission` WHERE `libelle`= 'conversation.removeConversation'));


INSERT IGNORE INTO `permission` (`libelle`) VALUES ('conversation.removeWhiteboard');
INSERT IGNORE INTO `role_permission` (`role_id`, `permission_id`) VALUES (4, 
(SELECT `id` FROM `permission` WHERE `libelle`= 'conversation.removeWhiteboard'));


INSERT IGNORE INTO `permission` (`libelle`) VALUES ('conversation.removeDocument');
INSERT IGNORE INTO `role_permission` (`role_id`, `permission_id`) VALUES (4, 
(SELECT `id` FROM `permission` WHERE `libelle`= 'conversation.removeDocument'));

