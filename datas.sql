SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

INSERT INTO `channel` (`id`, `name`) VALUES
(1,	'Europe');

INSERT INTO `comment` (`id`, `user_id`, `post_id`, `content`, `created_at`, `published_at`, `updated_at`) VALUES
(1,	4,	1,	'commentaire Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit minima modi nobis adipisci blanditiis! Ipsum.',	'2021-07-20 15:55:40',	'2021-07-20 15:55:40',	'2021-07-20 15:55:40'),
(2,	2,	1,	'commentaire2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit minima modi nobis adipisci blanditiis! Ipsum.',	'2021-07-20 15:56:10',	'2021-07-20 15:56:10',	'2021-07-20 15:56:10'),
(3,	1,	1,	'commentaire 1 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, sapiente.',	'2021-07-20 15:56:42',	'2021-07-20 15:56:42',	'2021-07-20 15:56:42'),
(4,	1,	2,	'Commentaire 1\r\nbla bla bla et encore bla',	'2021-07-20 16:04:36',	'2021-07-20 16:04:36',	'2021-07-20 16:04:36'),
(5,	4,	2,	'Commentaire 2\r\nbla bla bla et encore bla plus de blabla',	'2021-07-20 16:05:05',	'2021-07-20 16:05:05',	'2021-07-20 16:05:05'),
(6,	3,	2,	'Commentaire 5\r\nbla bla bla et encore bla',	'2021-07-20 16:05:26',	'2021-07-20 16:05:26',	'2021-07-20 16:05:26'),
(7,	4,	3,	'Commentaire 10\r\nbla bla bla et encore bla',	'2021-07-20 16:05:44',	'2021-07-20 16:05:44',	'2021-07-20 16:05:44'),
(8,	3,	4,	'Commentaire 11\r\nbla bla bla et encore bla',	'2021-07-20 16:06:08',	'2021-07-20 16:06:08',	'2021-07-20 16:06:08'),
(9,	2,	4,	'Commentaire 12\r\nbla bla bla et encore bla',	'2021-07-20 16:06:23',	'2021-07-20 16:06:23',	'2021-07-20 16:06:23'),
(10,	1,	3,	'essai',	'2021-07-20 16:41:14',	'2021-07-20 16:41:14',	'2021-07-20 16:41:14'),
(11,	2,	3,	'essai',	'2021-07-20 16:42:34',	'2021-07-20 16:42:34',	'2021-07-20 16:42:34'),
(12,	3,	3,	'essai',	'2021-07-20 16:42:53',	'2021-07-20 16:42:53',	'2021-07-20 16:42:53'),
(13,	4,	2,	'essai',	'2021-07-20 16:42:58',	'2021-07-20 16:42:58',	'2021-07-20 16:42:58'),
(14,	4,	1,	'essai',	'2021-07-20 16:43:42',	'2021-07-20 16:43:42',	'2021-07-20 16:43:42'),
(18,	1,	1,	'test1',	'2021-07-22 10:18:40',	'2021-07-22 10:18:40',	'2021-07-22 10:18:40'),
(19,	1,	1,	'test 2',	'2021-07-22 10:19:58',	'2021-07-22 10:19:58',	'2021-07-22 10:19:58'),
(21,	1,	1,	'test3',	'2021-07-22 10:22:13',	'2021-07-22 10:22:13',	'2021-07-22 10:22:13'),
(22,	1,	1,	'test avec log',	'2021-07-22 10:25:55',	'2021-07-22 10:25:55',	'2021-07-22 10:25:55'),
(23,	1,	1,	'Maxime porro, iusto dolor quo blanditiis dicta quos ex ratione sit saepe vitae, est minus, nostrum rerum incidunt ad atque accusamus quaerat quae. Provident, esse labore. Tempore mollitia soluta fugit obcaecati quidem, maxime accusamus est consequatur quod quaerat vitae praesentium itaque eum tempora! Dicta ipsum, temporibus delectus, at repellendus libero et, dignissimos incidunt corrupti facilis eum possimus eveniet fugit soluta provident harum rem voluptatem magni quas autem placeat explicabo. Officiis, illo commodi. Tempore ex quaerat accusantium odit et omnis laborum quibusdam esse aliquam rerum culpa voluptatum placeat animi neque perferendis dolorum inventore accusamus, laboriosam itaque aut voluptas nam. Cum molestias odit consequuntur minus, assumenda fuga vitae quis nemo omnis distinctio quisquam accusantium, ducimus fugiat sed. Cumque nesciunt asperiores voluptates ipsum repellendus iure quae dolore veritatis eos maxime labore porro cum quasi sunt id quos debitis et alias, nulla molestiae quia dignissimos aspernatur corrupti reiciendis. Veniam, repellendus! Minima quisquam ut ducimus voluptatibus. Recusandae a sapiente harum aperiam velit perspiciatis provident quia laudantium inventore fugiat, alias obcaecati doloribus sed odit voluptates aliquid, earum porro numquam dolorem nam? Cupiditate vitae autem ex mollitia dicta, optio sed amet nihil repudiandae modi rerum illo quam quisquam quae, error eos exercitationem dolores similique, laboriosam beatae facere. Exercitationem magni maxime qui harum! Sed odit animi sequi laborum.',	'2021-07-22 10:49:38',	'2021-07-22 10:49:38',	'2021-07-22 10:49:38'),
(24,	2,	2,	'mon commentaire',	'2021-07-22 20:02:00',	'2021-07-22 20:02:00',	'2021-07-22 20:02:00'),
(25,	2,	2,	'Test',	'2021-07-22 20:03:37',	'2021-07-22 20:03:37',	'2021-07-22 20:03:37'),
(26,	5,	5,	'mon commentaire top la classe',	'2021-07-22 20:04:08',	'2021-07-22 20:04:08',	'2021-07-22 20:04:08'),
(27,	2,	2,	'essaie commentaire',	'2021-07-23 08:58:31',	'2021-07-23 08:58:31',	'2021-07-23 08:58:31'),
(28,	2,	2,	'commenter',	'2021-07-23 09:04:47',	'2021-07-23 09:04:47',	'2021-07-23 09:04:47'),
(29,	2,	2,	'test',	'2021-07-23 09:30:45',	'2021-07-23 09:30:45',	'2021-07-23 09:30:45'),
(30,	3,	3,	'test1',	'2021-07-23 10:11:32',	'2021-07-23 10:11:32',	'2021-07-23 10:11:32'),
(31,	3,	3,	'coucou',	'2021-07-23 10:18:37',	'2021-07-23 10:18:37',	'2021-07-23 10:18:37'),
(32,	1,	2,	'essai',	'2021-07-26 12:16:24',	'2021-07-26 12:16:24',	'2021-07-26 12:16:24'),
(33,	2,	4,	'test d\'ajout de commentaire via l\'interface admin',	'2021-07-28 11:09:25',	'2021-07-28 11:09:25',	'2021-07-28 11:09:25'),
(34,	1,	3,	'super article',	'2021-07-30 10:46:19',	'2021-07-30 10:46:19',	'2021-07-30 10:46:19'),
(35,	1,	1,	'mon super commentaire',	'2021-07-30 11:22:05',	'2021-07-30 11:22:05',	'2021-07-30 11:22:05'),
(36,	1,	13,	'so beautiful',	'2021-07-30 17:44:24',	'2021-07-30 17:44:24',	'2021-07-30 17:44:24'),
(37,	1,	14,	'mon super commentaire de la mort qui tue',	'2021-08-02 14:58:39',	'2021-08-02 14:58:39',	'2021-08-02 14:58:39');

INSERT INTO `continent` (`id`, `name`) VALUES
(1,	'europe'),
(2,	'asia'),
(3,	'americas'),
(5,	'africa'),
(6,	'oceania');

INSERT INTO `country` (`id`, `continent_id`, `name`, `language`, `money`, `visa`, `vaccine`, `events`, `created_at`, `published_at`, `updated_at`) VALUES
(1,	1,	'France',	'Français',	'Euro',	0,	'non',	'Festival de Cannes, Fête de la musique, Défilé du 14 Juillet',	'2021-07-16 16:16:47',	'2021-07-16 16:16:47',	'2021-07-16 16:16:47'),
(2,	1,	'Italie',	'Italien',	'Euro',	0,	'non',	'Palio de Sienne, Carnavale de Venise ',	'2021-07-16 16:20:11',	'2021-07-16 16:20:11',	'2021-07-16 16:20:11'),
(3,	2,	'Chine',	'Chinois Mandarin',	'Yuan',	1,	'non',	'Nouvel an Chinois, Fêtes des lanternes, fête des bateaux Dragons',	'2021-07-16 16:22:58',	'2021-07-16 16:22:58',	'2021-07-16 16:22:58'),
(4,	3,	'Mexique',	'Espagnol',	'Peso Mexicain',	0,	'non',	'Bataille de Puebla, Festival des crânes et la foire de tous les saints',	'2021-07-16 16:27:54',	'2021-07-16 16:27:54',	'2021-07-16 16:27:54');

INSERT INTO `country_stuff` (`country_id`, `stuff_id`) VALUES
(1,	1),
(1,	2),
(2,	2),
(2,	3),
(3,	1),
(3,	2);

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210721085554',	'2021-07-21 13:10:35',	340),
('DoctrineMigrations\\Version20210728071617',	'2021-07-28 09:19:35',	101);


INSERT INTO `message` (`id`, `user_id`, `channel_id`, `content`, `created_at`) VALUES
(1,	1,	1,	'coucou',	'2021-07-28 10:19:57'),
(2,	1,	1,	'hello',	'2021-07-28 16:58:51'),
(3,	1,	1,	'essai',	'2021-07-28 17:25:44'),
(4,	1,	1,	'salut la team',	'2021-07-30 10:05:25'),
(5,	1,	1,	'salut tout le monde les gens',	'2021-07-30 10:24:09'),
(6,	1,	1,	'essaie en prod',	'2021-07-30 11:02:27'),
(7,	1,	1,	'salut tout le monde !!!',	'2021-07-30 11:25:31'),
(8,	9,	1,	'toc toc',	'2021-07-30 14:14:58'),
(9,	9,	1,	'coucou',	'2021-07-30 15:29:51'),
(10,	10,	1,	'Salut !',	'2021-07-30 15:37:50'),
(11,	9,	1,	'qsdsd',	'2021-07-30 15:54:04'),
(12,	9,	1,	'sqdsdqsd',	'2021-07-30 15:54:23'),
(13,	9,	1,	'qsdsqd',	'2021-07-30 15:54:30'),
(14,	9,	1,	'qsdsqd',	'2021-07-30 15:56:19'),
(15,	9,	1,	'zadzad',	'2021-07-30 15:56:55'),
(16,	9,	1,	'qdqsd',	'2021-07-30 15:58:05'),
(17,	9,	1,	'qsdsqd',	'2021-07-30 15:58:50'),
(18,	9,	1,	'qsdqs',	'2021-07-30 15:59:16'),
(19,	1,	1,	'coucou ',	'2021-07-30 16:03:35'),
(20,	9,	1,	'qsdasd',	'2021-07-30 16:04:39'),
(21,	9,	1,	'test avec id définie',	'2021-07-30 16:10:02'),
(22,	9,	1,	'essayons',	'2021-07-30 16:10:49'),
(23,	1,	1,	'hello',	'2021-07-30 16:11:27'),
(24,	9,	1,	'new test',	'2021-07-30 16:13:56'),
(25,	9,	1,	'avec un clear',	'2021-07-30 16:14:22'),
(26,	9,	1,	'avec actu',	'2021-07-30 16:22:09'),
(27,	9,	1,	'test',	'2021-07-30 16:24:45'),
(28,	9,	1,	'pour le plaisir',	'2021-07-30 16:24:57'),
(29,	9,	1,	'coucou',	'2021-07-30 16:25:41'),
(30,	9,	1,	'hello',	'2021-07-30 16:26:51'),
(31,	9,	1,	'cache',	'2021-07-30 16:27:53'),
(32,	1,	1,	'hello',	'2021-07-30 16:28:12'),
(33,	9,	1,	'comment va?',	'2021-07-30 16:28:18'),
(34,	9,	1,	'ssalut',	'2021-07-30 18:18:28'),
(35,	1,	1,	'tu vas bien ???',	'2021-07-30 18:18:35'),
(36,	1,	1,	'teste',	'2021-08-02 10:08:34'),
(37,	1,	1,	'test bis',	'2021-08-02 11:07:48'),
(38,	1,	1,	'qsdsq',	'2021-08-02 11:26:10'),
(39,	1,	1,	'sdsd',	'2021-08-02 11:28:21'),
(40,	1,	1,	'qsds',	'2021-08-02 11:29:01'),
(41,	1,	1,	'qdsqd',	'2021-08-02 11:29:37'),
(42,	1,	1,	'sds',	'2021-08-02 11:30:19'),
(43,	1,	1,	'qsdqsd',	'2021-08-02 11:32:13'),
(44,	1,	1,	'hello css',	'2021-08-02 11:42:42');

INSERT INTO `post` (`id`, `user_id`, `title`, `content`, `picture`, `created_at`, `published_at`, `updated_at`) VALUES
(1,	1,	'kebab',	'Spéciale dédicace à Charles qui a chaque pause à 10h, à 12h nous souhaitait \"bon kebab\".\r\nEt qui à peine le cours commençait attaquait direct avec kebab, Cookies etc...\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, ullam! Ipsum sequi, aut fugiat voluptatum cumque voluptatem repellat iure eius, minima a quo distinctio placeat facere blanditiis. Dolorum officia, sint aliquid odit, est neque, iure fugiat adipisci facilis repudiandae sunt! Maxime porro, iusto dolor quo blanditiis dicta quos ex ratione sit saepe vitae, est minus, nostrum rerum incidunt ad atque accusamus quaerat quae. Provident, esse labore. Tempore mollitia soluta fugit obcaecati quidem, maxime accusamus est consequatur quod quaerat vitae praesentium itaque eum tempora! Dicta ipsum, temporibus delectus, at repellendus libero et, dignissimos incidunt corrupti facilis eum possimus eveniet fugit soluta provident harum rem voluptatem magni quas autem placeat explicabo. Officiis, illo commodi. Tempore ex quaerat accusantium odit et omnis laborum quibusdam esse aliquam rerum culpa voluptatum placeat animi neque perferendis dolorum inventore accusamus, laboriosam itaque aut voluptas nam. Cum molestias odit consequuntur minus, assumenda fuga vitae quis nemo omnis distinctio quisquam accusantium, ducimus fugiat sed. Cumque nesciunt asperiores voluptates ipsum repellendus iure quae dolore veritatis eos maxime labore porro cum quasi sunt id quos debitis et alias, nulla molestiae quia dignissimos aspernatur corrupti reiciendis. Veniam, repellendus! Minima quisquam ut ducimus voluptatibus. Recusandae a sapiente harum aperiam velit perspiciatis provident quia laudantium inventore fugiat, alias obcaecati doloribus sed odit voluptates aliquid, earum porro numquam dolorem nam? Cupiditate vitae autem ex mollitia dicta, optio sed amet nihil repudiandae modi rerum illo quam quisquam quae, error eos exercitationem dolores similique, laboriosam beatae facere. Exercitationem magni maxime qui harum! Sed odit animi sequi laborum.',	'0017.jpg',	'2021-07-20 14:44:16',	'2021-07-20 14:44:16',	'2021-07-20 14:44:16'),
(2,	2,	'Bien-être',	'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus modi eius, quibusdam vel tempore facilis in veniam tempora eligendi esse velit possimus? Doloribus, totam! Veritatis laborum itaque recusandae dolorum nostrum fugit maxime quaerat deleniti ipsum mollitia sit assumenda neque laudantium, aspernatur repellendus vel porro ratione quis, veniam, molestias odit aliquid laboriosam non. Ducimus sapiente tempore nihil dicta quasi error distinctio voluptas id laudantium perferendis enim porro eaque minima ad harum, accusantium debitis pariatur culpa. Impedit libero praesentium ducimus, quasi consectetur optio nostrum voluptatum ipsam consequuntur nobis laborum sunt iste modi, maxime vero quos? Nihil facere repudiandae illum est assumenda reprehenderit veniam, natus labore officia perspiciatis, maiores alias iure magnam illo a nobis officiis blanditiis beatae explicabo velit possimus eius? Necessitatibus cupiditate soluta laudantium vitae impedit, eaque suscipit ullam inventore consequatur magni atque excepturi tempore laborum hic eius labore sit, molestiae officia recusandae nulla voluptas at! Ab dolore consequuntur placeat asperiores. Aspernatur voluptatibus reprehenderit nam assumenda blanditiis sed neque accusamus at laudantium, autem sit velit. Iusto corporis ipsam quos nulla officiis dolorum alias sequi, distinctio exercitationem et laboriosam, molestias inventore animi harum eligendi repudiandae. Itaque accusantium repellendus dolore asperiores sapiente porro deserunt eos sint fugit eaque qui soluta fuga accusamus debitis nemo doloremque voluptates enim nesciunt aperiam quod, commodi ipsam modi possimus. Illum possimus dolorum recusandae tempore, expedita saepe perferendis unde vitae, doloribus fugit vel at aliquam officia! Ratione corporis eum illo ipsa, excepturi quia iusto sint sit facilis eligendi quidem impedit est minus veritatis non unde suscipit nihil tenetur eius.',	'023.jpg',	'2021-07-20 14:53:59',	'2021-07-20 14:53:59',	'2021-07-20 14:53:59'),
(3,	2,	'essai',	'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus modi eius, quibusdam vel tempore facilis in veniam tempora eligendi esse velit possimus? Doloribus, totam! Veritatis laborum itaque recusandae dolorum nostrum fugit maxime quaerat deleniti ipsum mollitia sit assumenda neque laudantium, aspernatur repellendus vel porro ratione quis, veniam, molestias odit aliquid laboriosam non. Ducimus sapiente tempore nihil dicta quasi error distinctio voluptas id laudantium perferendis enim porro eaque minima ad harum, accusantium debitis pariatur culpa. Impedit libero praesentium ducimus, quasi consectetur optio nostrum voluptatum ipsam consequuntur nobis laborum sunt iste modi, maxime vero quos? Nihil facere repudiandae illum est assumenda reprehenderit veniam, natus labore officia perspiciatis, maiores alias iure magnam illo a nobis officiis blanditiis beatae explicabo velit possimus eius? Necessitatibus cupiditate soluta laudantium vitae impedit, eaque suscipit ullam inventore consequatur magni atque excepturi tempore laborum hic eius labore sit, molestiae officia recusandae nulla voluptas at! Ab dolore consequuntur placeat asperiores. Aspernatur voluptatibus reprehenderit nam assumenda blanditiis sed neque accusamus at laudantium, autem sit velit. Iusto corporis ipsam quos nulla officiis dolorum alias sequi, distinctio exercitationem et laboriosam, molestias inventore animi harum eligendi repudiandae. Itaque accusantium repellendus dolore asperiores sapiente porro deserunt eos sint fugit eaque qui soluta fuga accusamus debitis nemo doloremque voluptates enim nesciunt aperiam quod, commodi ipsam modi possimus. Illum possimus dolorum recusandae tempore, expedita saepe perferendis unde vitae, doloribus fugit vel at aliquam officia! Ratione corporis eum illo ipsa, excepturi quia iusto sint sit facilis eligendi quidem impedit est minus veritatis non unde suscipit nihil tenetur eius.',	'0021.jpg',	'2021-07-20 14:55:33',	'2021-07-20 14:55:33',	'2021-07-20 14:55:33'),
(4,	4,	'Travaux',	'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus modi eius, quibusdam vel tempore facilis in veniam tempora eligendi esse velit possimus? Doloribus, totam! Veritatis laborum itaque recusandae dolorum nostrum fugit maxime quaerat deleniti ipsum mollitia sit assumenda neque laudantium, aspernatur repellendus vel porro ratione quis, veniam, molestias odit aliquid laboriosam non. Ducimus sapiente tempore nihil dicta quasi error distinctio voluptas id laudantium perferendis enim porro eaque minima ad harum, accusantium debitis pariatur culpa. Impedit libero praesentium ducimus, quasi consectetur optio nostrum voluptatum ipsam consequuntur nobis laborum sunt iste modi, maxime vero quos? Nihil facere repudiandae illum est assumenda reprehenderit veniam, natus labore officia perspiciatis, maiores alias iure magnam illo a nobis officiis blanditiis beatae explicabo velit possimus eius? Necessitatibus cupiditate soluta laudantium vitae impedit, eaque suscipit ullam inventore consequatur magni atque excepturi tempore laborum hic eius labore sit, molestiae officia recusandae nulla voluptas at! Ab dolore consequuntur placeat asperiores. Aspernatur voluptatibus reprehenderit nam assumenda blanditiis sed neque accusamus at laudantium, autem sit velit. Iusto corporis ipsam quos nulla officiis dolorum alias sequi, distinctio exercitationem et laboriosam, molestias inventore animi harum eligendi repudiandae. Itaque accusantium repellendus dolore asperiores sapiente porro deserunt eos sint fugit eaque qui soluta fuga accusamus debitis nemo doloremque voluptates enim nesciunt aperiam quod, commodi ipsam modi possimus. Illum possimus dolorum recusandae tempore, expedita saepe perferendis unde vitae, doloribus fugit vel at aliquam officia! Ratione corporis eum illo ipsa, excepturi quia iusto sint sit facilis eligendi quidem impedit est minus veritatis non unde suscipit nihil tenetur eius.',	'0022.jpg',	'2021-07-20 14:54:40',	'2021-07-20 14:54:40',	'2021-07-20 14:54:40'),
(5,	1,	'test ajout',	'kndsvknmq vbnqmvqmO',	'0014.jpg',	'2021-07-22 15:18:48',	'2021-07-22 15:18:48',	'2021-07-22 15:18:48'),
(6,	1,	'ajout d\'un article',	'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores natus facere assumenda ad, deserunt error. Quod perferendis repellat, quae corporis et ab minima pariatur, nam molestias ipsam magni nesciunt sed laborum voluptatibus doloribus esse alias, temporibus ullam? Libero, dolorem distinctio? Doloremque nihil quaerat dicta nesciunt, praesentium iusto vitae voluptates dolores optio suscipit itaque velit officiis ipsam dolorem natus provident similique eum nam. Nostrum laboriosam at aliquid animi provident itaque sit ipsum quos, possimus esse blanditiis ipsam dolore voluptatem fugit. Tempore voluptates deleniti consequatur! Autem sequi culpa velit nulla ullam quisquam voluptatem mollitia dolorem repellendus. Assumenda quasi, placeat maiores cupiditate, esse ad facere quibusdam earum at accusantium nihil perspiciatis natus ipsa recusandae modi iusto rem ab id non! Nostrum debitis necessitatibus doloremque nihil quia minima eum, quibusdam corrupti suscipit. Blanditiis deleniti mollitia expedita enim, voluptate officiis dolorum qui ipsam quo reprehenderit incidunt exercitationem. Facilis, officiis eos. Sint itaque quae possimus enim, recusandae delectus? Tenetur quasi quo eveniet nostrum tempore aliquid laudantium rem numquam laborum in provident consequatur accusantium cumque incidunt corrupti, minima commodi recusandae sunt ducimus? Vel, officia est architecto nobis voluptas, et vitae, quia dolor quisquam doloremque quo perspiciatis. Error dignissimos quo tempora ullam, delectus impedit tempore rem asperiores deleniti facilis? Nisi tenetur ab aspernatur exercitationem impedit atque doloremque nihil illum quidem earum esse ea excepturi soluta explicabo maxime iusto quas, blanditiis sunt in, praesentium alias. Similique, neque! Porro cum facilis obcaecati autem consequuntur quos blanditiis reprehenderit quae, nam doloremque aspernatur cumque dolores a modi dolorem quam provident hic dolorum labore optio unde, incidunt ut nisi. Nam quidem impedit temporibus deleniti doloremque magni, soluta et modi accusamus itaque adipisci commodi omnis laudantium maxime sapiente vitae magnam doloribus deserunt ex, iusto odit molestias quae. Blanditiis sapiente at voluptatum dolorum repellendus aliquid vero recusandae, officiis excepturi impedit. Tenetur ea atque, ipsum hic doloribus beatae accusantium dolorem asperiores iste sit eligendi vel, veniam, saepe esse! Sint blanditiis ducimus magnam ex perferendis, totam ullam id ad eaque porro tenetur quas maiores voluptas doloremque, iure quasi labore odit debitis sapiente exercitationem maxime expedita. Perspiciatis maxime libero, obcaecati nam corrupti eum eaque sapiente, quaerat dolorum nostrum provident blanditiis ducimus, atque illum incidunt tempora? Minima placeat corporis porro totam animi soluta aliquid, voluptate magni quam, voluptatibus explicabo iure doloremque saepe? Sed ex omnis aliquam ipsa quia ad in! Incidunt, impedit! Suscipit nihil consectetur cupiditate. Expedita rem quod veritatis ex quibusdam non ratione repellat nesciunt doloremque sequi laudantium vitae ut ab nostrum, dicta distinctio perferendis in maxime odio itaque illo. Id nesciunt dolore aut qui asperiores, repellendus vitae reiciendis quas, repudiandae perspiciatis doloremque ex quasi, explicabo cupiditate? Qui ipsam exercitationem, obcaecati quidem temporibus eius saepe odio nemo magnam impedit quis nobis quo! Architecto quibusdam quo dolores saepe cupiditate numquam delectus esse temporibus, est nulla quod ut earum itaque consequatur laborum nam dolore veritatis quis nobis, minus consectetur voluptatum amet ducimus? In repudiandae iusto at, odit aperiam exercitationem neque esse pariatur qui saepe accusamus quis eos laborum voluptates illo! Enim ea veniam mollitia quae quod, distinctio dolor accusamus dicta.',	'0005.jpg',	'2021-07-22 18:03:07',	'2021-07-22 18:03:07',	'2021-07-22 18:03:07'),
(8,	1,	'test message',	'mon super article pour vérifier l\'affichage message',	'0013.jpg',	'2021-07-26 10:46:50',	'2021-07-26 10:46:50',	'2021-07-26 10:46:50'),
(9,	2,	'test via l\'administration du site',	'Ayant beaucoup d\'inspiration aujourd\'hui, je préfère m\'arrêter ici',	'0020.jpg',	'2021-07-28 11:51:21',	'2021-07-28 11:51:21',	'2021-07-28 11:51:21'),
(10,	1,	'test',	'coucou',	'0023.jpg',	'2021-07-28 14:06:25',	'2021-07-28 14:06:25',	'2021-07-28 14:06:25'),
(11,	1,	'test',	'test',	'0018.jpg',	'2021-07-30 16:51:10',	'2021-07-30 16:51:10',	'2021-07-30 16:51:10'),
(12,	9,	'user 9',	'test',	'0023.jpg',	'2021-07-30 17:40:22',	'2021-07-30 17:40:22',	'2021-07-30 17:40:22'),
(13,	9,	'test avec photo',	'bla bla bla dracula',	'fond-ecran-wallpaper-image-fonds-ecran-abstrait-hd-03-61041e0a61d65.jpg',	'2021-07-30 17:43:06',	'2021-07-30 17:43:06',	'2021-07-30 17:43:06'),
(14,	9,	'connexion',	'essai',	'fond-ecran-wallpaper-image-fonds-ecran-abstrait-hd-03-61041e0a61d65.jpg',	'2021-07-30 17:46:22',	'2021-07-30 17:46:22',	'2021-07-30 17:46:22');

INSERT INTO `post_continent` (`post_id`, `continent_id`) VALUES
(1,	1),
(1,	2),
(2,	1),
(2,	3),
(6,	1),
(8,	1);

INSERT INTO `post_country` (`post_id`, `country_id`) VALUES
(1,	1),
(2,	1),
(2,	3),
(3,	3),
(5,	4),
(6,	1),
(8,	1),
(11,	2),
(12,	1),
(13,	2),
(14,	2);


INSERT INTO `stuff` (`id`, `name`, `created_at`, `published_at`, `updated_at`) VALUES
(1,	'parapluie',	'2021-07-20 14:45:50',	'2021-07-20 14:45:50',	'2021-07-20 14:45:50'),
(2,	'lampe torche',	'2021-07-20 14:46:01',	'2021-07-20 14:46:01',	'2021-07-20 14:46:01'),
(3,	'parasole',	'2021-07-20 14:46:20',	'2021-07-20 14:46:20',	'2021-07-20 14:46:20');

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `firstname`, `lastname`, `nickname`, `picture`, `country`, `date_of_birth`, `created_at`, `published_at`, `update_at`, `is_verified`) VALUES
(1,	'celine@gmail.com',	'[\"ROLE_ADMIN\"]',	'$2y$13$/j2jkRrfnZ5U4DZvFNjXze/YdqVqpnQJ6fAoYflN5M0jjiTMBYi9y',	'Céline',	'Tata',	'lyly',	'celine.png',	'France',	'1981-02-13',	'2021-07-21 13:14:02',	'2021-07-21 13:14:02',	'2021-07-21 13:14:02',	1),
(2,	'charles@oclock.io',	'',	'$2y$13$Q1/bMr99vmagA1GWf.wmgOE5hpRrAVW382DdMovbyy.PGIxzv7RP6 ',	'Charles',	'O\'clock',	'Charles',	'0024.jpg',	'France',	'1989-07-20',	'2021-07-21 13:19:21',	'2021-07-21 13:19:21',	'2021-07-21 13:19:21',	1),
(3,	'greg@oclock.io',	'',	'$2y$13$Q1/bMr99vmagA1GWf.wmgOE5hpRrAVW382DdMovbyy.PGIxzv7RP6 ',	'Greg',	'oclock',	'greg',	'0001.jpg',	'Chine',	'1980-07-20',	'2021-07-21 13:22:31',	'2021-07-21 13:22:31',	'2021-07-21 13:22:31',	1),
(4,	'fabio@gmail.com',	'',	'$2y$13$Q1/bMr99vmagA1GWf.wmgOE5hpRrAVW382DdMovbyy.PGIxzv7RP6',	'Fabio',	'OC\'lock',	'fabio',	'0003.jpg',	'Mexique',	'1985-07-20',	'2021-07-21 13:24:28',	'2021-07-21 13:24:28',	'2021-07-21 13:24:28',	1),
(5,	'tata@g.fr',	'[]',	'$2y$13$d1rsK8bfaEhvYFHEalyr6.flR7x6lzVqO5to2SsWWBoa8Qf1c6qA6',	'tata',	'yoyo',	'toto',	NULL,	'italie',	'1906-01-03',	'2021-07-21 15:58:27',	'2021-07-21 15:58:27',	'2021-07-21 15:58:27',	0),
(6,	'tata@yoyo.com',	'[]',	'tatayoyo',	'Tata',	'Yoyo',	'tata',	NULL,	'italie',	'1990-02-27',	'2021-07-27 16:29:55',	'2021-07-27 16:29:55',	'2021-07-27 16:29:55',	1),
(8,	'tati@g.com',	'[]',	'$2y$13$k9KChOhdgUCXIiP9Dj6KhO3VwEBjxj6zwGzxTsVq0TdW54B9jfShG',	'YOYO',	'TATA',	'tati',	NULL,	'japon',	'1917-05-09',	'2021-07-29 13:45:03',	'2021-07-29 13:45:03',	'2021-07-29 13:45:03',	0),
(9,	'mama@mya.com',	'[]',	'$2y$13$CnjAs9lY/U9WpjoUAWq1FOqx.Jm81M/i7WCCegxxe9k0DZwCscgji',	'mama',	'myas',	'mam',	'0022.jpg',	'italie',	'1918-04-18',	'2021-07-30 12:20:28',	'2021-07-30 12:20:28',	'2021-07-30 12:20:28',	1),
(10,	'alexis.vandepitte@oclock.Io',	'[]',	'$2y$13$YzcW2Dq1E7mwNR7D7p2MruKL1toabvOB6besnZd4v.Vmd2JBA5j6m',	'Alexis',	'le casseur de site',	'J\'ai tout cassé',	NULL,	'France',	'1992-05-03',	'2021-07-30 15:37:30',	'2021-07-30 15:37:30',	'2021-07-30 15:37:30',	0);
