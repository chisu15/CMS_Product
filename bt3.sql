-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 22, 2024 lúc 03:43 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bt3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `image`, `slug`, `created_at`) VALUES
(14, 'Nhập vai', 'Đây là danh mục nhập vai', '1732297249.jpg', 'nhap-vai', '2024-11-22 17:40:49'),
(15, 'Đơn giản', 'Đây là danh mục đơn giản', '1732297271.jpg', 'don-gian', '2024-11-22 17:41:11'),
(16, 'Phiêu lưu', 'Đây là danh mục phiêu lưu', '1732297293.jpg', 'phieu-luu', '2024-11-22 17:41:33'),
(17, 'Hành động', 'Đây là danh mục hành động', '1733511495.webp', 'hanh-dong', '2024-12-06 18:58:15'),
(18, 'Sinh tồn', 'Đây là danh mục sinh tồn', '1733516719.webp', 'sinh-ton', '2024-12-06 20:25:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `requirement` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `image` varchar(255) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `developer` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `requirement`, `slug`, `original_price`, `selling_price`, `status`, `image`, `trending`, `created_at`, `developer`, `publisher`, `category_id`, `quantity`) VALUES
(8, 'FINAL FANTASY XVI new', 'The first fully fledged Action RPG in the mainline Final Fantasy series.\r\nAn epic dark fantasy world where the fate of the land is decided by the mighty Eikons and the Dominants who wield them. This is the tale of Clive Rosfield, a warrior granted the title “First Shield of Rosaria” and sworn to protect his younger brother Joshua, the dominant of the Phoenix. Before long, Clive will be caught up in a great tragedy and swear revenge on the Dark Eikon Ifrit, a mysterious entity that brings calamity in its wake.\r\n\r\nTitanic Clashes - When rival Dominants come head to head, epic battles between their Eikons ensue!\r\n\r\nEikonic Action - Clive utilizes the powers of multiple Eikons in breakneck battle!\r\n\r\n\r\nFrom Strength to Strength\r\nA plethora of powerful swordplay techniques and Eikonic abilities lie within Clive\'s remit—and it is up to you to decide which ones you wish to learn or upgrade. If you\'re having trouble choosing, upgrades can be unlocked automatically.\r\n\r\n\r\nStory-focused mode is recommended for those players who are less comfortable with action games and wish to focus more on the game\'s story elements. In this mode, Clive will automatically evade some attacks, and epic Eikonic combos can be triggered with simple button presses. Action-focused mode, where Clive\'s every action is controlled by the player, is available for those who are confident in their skill—or want to test it.\r\n\r\n\r\n\r\n■Content included with this product\r\n- FINAL FANTASY XVI Base Game\r\n- “Onion Sword” weapon (Available for redemption from the System tab in the Main Menu upon reaching the main scenario quest \"A Chance Encounter.\")', 'MINIMUM:\r\nRequires a 64-bit processor and operating system\r\nOS: Windows® 10 / 11 64-bit\r\nProcessor: AMD Ryzen™ 5 1600 / Intel® Core™ i5-8400\r\nMemory: 16 GB RAM\r\nGraphics: AMD Radeon™ RX 5700 / Intel® Arc™ A580 / NVIDIA® GeForce® GTX 1070\r\nDirectX: Version 12\r\nStorage: 170 GB available space\r\nAdditional Notes: 30FPS at 720p expected. SSD required. VRAM 8GB or above.\r\n\r\nRECOMMENDED:\r\nRequires a 64-bit processor and operating system\r\nOS: Windows® 10 / 11 64-bit\r\nProcessor: AMD Ryzen™ 7 5700X / Intel® Core™ i7-10700\r\nMemory: 16 GB RAM\r\nGraphics: AMD Radeon™ RX 6700 XT / NVIDIA® GeForce® RTX 2080\r\nDirectX: Version 12\r\nStorage: 170 GB available space\r\nAdditional Notes: 60FPS at 1080p expected. SSD required. VRAM 8GB or above.', 'final-fantasy-xvi', 1249000, 0, 1, '1733328126.jpg', 1, '2024-11-26 07:21:53', 'Square Enix', 'Square Enix', 14, 100),
(11, 'Days Gone', 'ABOUT THIS GAME\r\nDays Gone is an open-world action-adventure game set in a harsh wilderness two years after a devastating global pandemic.\r\n\r\nStep into the dirt flecked shoes of former outlaw biker Deacon St. John, a bounty hunter trying to find a reason to live in a land surrounded by death. Scavenge through abandoned settlements for equipment to craft valuable items and weapons, or take your chances with other survivors trying to eke out a living through fair trade… or more violent means.\r\n\r\nKEY FEATURES\r\n• A striking setting: From forests and meadows, to snowy plains and desert lava fields, the Pacific Northwest is both beautiful and lethal. Explore a variety of mountains, caves, mines and small rural towns, scarred by millions of years of volcanic activity.\r\n• Brutal encounters: With vicious gangs and hordes of Freakers roaming the land, you’ll need to make full use of a variety of customizable traps, weapons, and upgradable skills to stay alive. Don’t forget your Drifter bike, an invaluable tool in a vast land.\r\n• An ever-changing environment: Jump on the saddle of Deacon’s trusty motorbike and explore a dynamic world dramatically affected by the weather, a dramatic day/night cycle and the evolving Freakers, who adjust to their surroundings – and the people in it.\r\n• A compelling story: Lose yourself in a powerful tale of desperation, betrayal and regret, as Deacon St. John searches for hope after suffering a deep, personal loss. What makes us human when faced with the daily struggle for survival?\r\n\r\nINCLUDES\r\n• New Game Plus\r\n• Survival Mode\r\n• Challenge Mode\r\n• Bike Skins\r\n\r\nPC features include ultra-wide monitor support, unlocked framerates and improved graphics (increased level of details, field of view, foliage draw distances).\r\nMATURE CONTENT DESCRIPTION\r\nThe developers describe the content like this:\r\n\r\nThis Game may contain content not appropriate for all ages, or may not be appropriate for viewing at work: Frequent Violence or Gore, General Mature Content', 'SYSTEM REQUIREMENTS\r\nMINIMUM:\r\nRequires a 64-bit processor and operating system\r\nOS: Windows 10 64-bits\r\nProcessor: Intel Core i5-2500K@3.3GHz or AMD FX 6300@3.5GHz\r\nMemory: 8 GB RAM\r\nGraphics: Nvidia GeForce GTX 780 (3 GB) or AMD Radeon R9 290 (4 GB)\r\nDirectX: Version 11\r\nStorage: 70 GB available space\r\nAdditional Notes: Though not required, SSD for storage and 16 GB of memory is recommended\r\nRECOMMENDED:\r\nRequires a 64-bit processor and operating system\r\nOS: Windows 10 64-bits\r\nProcessor: Intel Core i7-4770K@3.5GHz or Ryzen 5 1500X@3.5GHz\r\nMemory: 16 GB RAM\r\nGraphics: Nvidia GeForce GTX 1060 (6 GB) or AMD Radeon RX 580 (8 GB)\r\nDirectX: Version 11\r\nStorage: 70 GB available space\r\nAdditional Notes: Though not required, SSD for storage is recommended', 'days-gone', 1159000, 289500, 1, '1733510169.jpg', 1, '2024-12-06 18:36:09', 'Bend Studio', ' PlayStation Publishing LLC', 16, 100),
(12, 'Monster Hunter Wilds', 'Về trò chơi này\r\nThe unbridled force of nature runs wild and relentless, with environments transforming drastically from one moment to the next.\r\nThis is a story of monsters and humans and their struggles to live in harmony in a world of duality.\r\nFulfill your duty as a Hunter by tracking and defeating powerful monsters and forging strong new weapons and armor from the materials you harvest from your hunt as you uncover the connection between the people of the Forbidden Lands and the locales they inhabit.\r\nThe ultimate hunting experience awaits you in Monster Hunter Wilds.\r\nStory\r\nA few years past, a young boy named Nata was rescued at the border of the Forbidden Lands, an unexplored region the guild has yet to survey.\r\nAfter hearing the boy’s tale of his lone escape from a mysterious monster that attacked his village, the Guild organized an expedition into the Forbidden Lands to investigate.\r\nA Living World\r\nEnvironments within the Forbidden Lands can drastically change as the weather shifts constantly and suddenly. During the harsh Fallow and perilous Inclemency periods, ravenous monsters will venture out to hunt in packs, yet during the Plenty periods, wildlife is rich and abundant.\r\nMonsters\r\nThe monsters who inhabit these environments have been forced to adapt to the dynamic changes that occur, using their unique characteristics to survive and thrive.\r\nHunting\r\nAs the world around them changes, so must the hunters and their tactics. Not only will hunters have a multitude of weapons and armor to choose from, but the art of the hunt itself has evolved as hunters learn to anticipate monsters’ behavior and familiarize themselves with their environment.\r\nCharacters\r\nFrom hunting partners to fellow expedition members, you’ll encounter plenty of those who will support you on your journey.', 'Yêu cầu hệ thống\r\nTối thiểu:\r\nYêu cầu vi xử lý và hệ điều hành đều chạy 64-bit\r\nHĐH: Windows®10 (64-bit Required)\r\nBộ xử lý: Intel® Core™ i5-10600 or Intel® Core™ i3-12100F or AMD Ryzen™ 5 3600\r\nBộ nhớ: 16 GB RAM\r\nĐồ họa: NVIDIA® GeForce® GTX 1660 Super(VRAM 6GB) or AMD Radeon™ RX 5600 XT(VRAM 6GB)\r\nDirectX: Phiên bản 12\r\nKết nối: Cáp mạng Internet\r\nLưu trữ: 140 GB chỗ trống khả dụng\r\nGhi chú thêm: SSD required. This game is expected to run at 1080p (upscaled from 720 native resolution) / 30 fps under the \"Lowest\" graphics setting. DirectStorage supported.\r\nKhuyến nghị:\r\nYêu cầu vi xử lý và hệ điều hành đều chạy 64-bit\r\nHĐH: Windows®10 (64-bit Required)\r\nBộ xử lý: Intel® Core™ i5-11600K or Intel® Core™ i5-12400 or AMD Ryzen™ 5 3600X or AMD Ryzen™ 5 5500\r\nBộ nhớ: 16 GB RAM\r\nĐồ họa: NVIDIA® GeForce® RTX 2070 Super(VRAM 8GB) or NVIDIA® GeForce® RTX 4060(VRAM 8GB) or　AMD Radeon™ RX 6700XT(VRAM 12GB)\r\nDirectX: Phiên bản 12\r\nKết nối: Cáp mạng Internet\r\nLưu trữ: 140 GB chỗ trống khả dụng\r\nGhi chú thêm: SSD required. This game is expected to run at 1080p / 60 fps (with Frame Generation enabled) under the \"Medium\" graphics setting. DirectStorage supported.', 'monster-hunter-wilds', 1390000, 0, 1, '1733511159.jpg', 1, '2024-12-06 18:52:39', ' CAPCOM Co., Ltd.', ' CAPCOM Co., Ltd.', 14, 100),
(13, 'Luma Island', 'Về trò chơi này\r\nGo solo or play with up to 4 friends and family members, this island is yours to discover!\r\n\r\n\r\n\r\n\r\n\r\nBegin your extraordinary journey in a humble old caravan and rise to the grand achievement of building a majestic manor that you can proudly call your home.\r\n\r\nTraverse the island solving quests and helping the locals through their struggles. Dangerous spider caves, ancient temples, mind-bending puzzles and hidden treasures await you!\r\nPick from seven unique in-depth professions each with its own progression path.\r\nUpgrade your tools to gather rare materials and collaborate with your teammates to become the masters of your crafts.', 'Yêu cầu hệ thống\r\nTối thiểu:\r\nYêu cầu vi xử lý và hệ điều hành đều chạy 64-bit\r\nHĐH: Windows 10\r\nBộ xử lý: Intel i5\r\nBộ nhớ: 8 GB RAM\r\nĐồ họa: NVIDIA GTX 1060\r\nDirectX: Phiên bản 11\r\nKết nối: Cáp mạng Internet\r\nLưu trữ: 7 GB chỗ trống khả dụng\r\nCard âm thanh: N/A\r\nKhuyến nghị:\r\nYêu cầu vi xử lý và hệ điều hành đều chạy 64-bit\r\nHĐH: Windows 10\r\nBộ xử lý: Intel i7\r\nBộ nhớ: 16 GB RAM\r\nĐồ họa: NVIDIA GTX 1660Ti\r\nDirectX: Phiên bản 11\r\nKết nối: Cáp mạng Internet\r\nLưu trữ: 12 GB chỗ trống khả dụng\r\nCard âm thanh: N/A', 'luma-island', 200000, 0, 1, '1733511274.jpg', 1, '2024-12-06 18:54:34', 'Feel Free Games', 'Feel Free Games', 15, 100),
(14, 'Caves of Qud', 'Về trò chơi này\r\n\r\n\r\n\r\n\r\nCaves of Qud is a science fantasy roguelike epic steeped in retrofuturism, deep simulation, and swathes of sentient plants. Come inhabit a living, breathing world and chisel through layers of thousand-year-old civilizations. Decide: is it a dying earth, or is it on the verge of rebirth?\r\n\r\n\r\n\r\nDo anything and everything. Caves of Qud is a deeply simulated, biologically diverse, richly cultured world.\r\n\r\nDEEP PHYSICAL SIMULATION — Don’t like the wall blocking your way? Dig through it with a pickaxe, or eat through it with your corrosive gas mutation, or melt it to lava. Yes, every wall has a melting point.\r\n\r\nFULLY SIMULATED CREATURES — Every monster and NPC is as fully simulated as the player. That means they have levels, skills, equipment, faction allegiances, and body parts. So if you have a mutation that lets you, say, psionically dominate a spider, you can traipse through the world as a spider, laying webs and eating things.\r\n\r\nDYNAMIC FACTION SYSTEM — Pursue allegiances with over 70 factions: apes, crabs, trees, robots, and highly entropic beings, just to name a few.\r\n\r\nRICHLY DETAILED SCIENCE FANTASY SETTING — Over fifteen years of worldbuilding have led to a rich, weird, labyrinthine, one-of-a-kind storyworld, layered on top of the simulation, all for you to explore. Live and drink, friend.\r\n\r\nTACTICAL GAMEPLAY — Turn-based, sandbox exploration and combat offers as many solutions as you and your mutations, implants, artifacts, and skills are creative enough to invent.\r\n\r\nRPG ELEMENTS — Quests, NPCs, villages, historic sites; some dynamic and some handwritten, interwoven to produce a transportative RPG experience.\r\n\r\nATMOSPHERIC ORIGINAL SOUNDTRACK — Over two hours of otherworldly music to delve to.\r\n\r\n\r\n\r\n\r\n\r\nCaves of Qud has one of the most expressive character creators of all time.\r\n\r\nPlay the role of a mutant indigenous to the salt-spangled dunes and jungles of Qud, or play a true kin descendant from one of the few remaining eco-domes — the toxic arboreta of Ekuemekiyye, the ice-sheathed arcology of Ibul, or the crustal mortars of Yawningmoon.\r\n\r\nBuild your character out of:\r\n\r\nOver 70 mutations — outfit yourself with wings, two heads, four arms, flaming hands, teleportation, the power to clone yourself…\r\n\r\nDozens of cybernetic implants (and more to find as treasure) — night vision, translucent skin, carbide fists, spring-loaded ankle tendons…\r\n\r\n24 castes and kits from across the social order of Qud and beyond Moghra’yi, the Great Salt Desert\r\n\r\nToo overwhelmed to build a character from scratch? Choose one of 9 preset characters and start your adventure right away. Then return to character creation when you are ready.\r\n\r\n\r\n\r\n\r\n\r\nPlay one of four modes:\r\n\r\nCLASSIC — Like other traditional roguelikes, this mode has permadeath, meaning you lose your character when you die. Extremely challenging even for experts.\r\n\r\nROLEPLAY — Play it like an RPG. Save your progress at checkpoints located in settlements.\r\n\r\nWANDER — Focus on exploration. Most creatures will not attack you, you don’t gain experience by killing, but you DO gain experience by discovering new locations and treating with legendary creatures.\r\n\r\nDAILY — One chance with a fixed character and world seed. How long will you survive?\r\n\r\n\r\n\r\nAfter 9 years of continuous development and frequent updates, Caves of Qud has finally reached its 1.0 release! Here are some highlights of what\'s been added for 1.0:\r\n\r\nThe last leg of the main quest\r\n\r\nThe new, fully graphical UI\r\n\r\nHundreds of visual & sound effects\r\n\r\nLots of polish & stability\r\n\r\n\r\n\r\n\r\n\r\nCaves of Qud is a project of epic proportions that\'s been in development for over fifteen years, since 2007. It began as the science fantasy roguelike dream of co-creators Jason Grinblat and Brian Bucklew, who released the first beta in 2010. Since then, it\'s accrued a few more contributors who have enriched the project by helping to add visual effects, sound effects, an original soundtrack, a new UI, new game systems, new lore, and half a world of content. Caves of Qud has grown into a wild garden of emergent narrative, where a handwritten story weaves a path through rich physical, social, and historical simulations. The result is a hybrid handcrafted and procedurally-generated world that\'s alive in a way few games are.', 'Yêu cầu hệ thống\r\nWindowsmacOSSteamOS + Linux\r\nTối thiểu:\r\nHĐH *: Windows 7 (SP1+), Windows 10 and Windows 11\r\nBộ xử lý: 1GHz or faster. SSE2 instruction set support.\r\nBộ nhớ: 4 GB RAM\r\nĐồ họa: Graphics card: DX10, DX11, DX12 capable\r\nLưu trữ: 2 GB chỗ trống khả dụng\r\n* Bắt đầu từ 01/01/2024, phần mềm Steam sẽ chỉ hỗ trợ từ Windows 10 trở lên.', 'caves-of-qud', 385000, 327000, 1, '1733516907.jpg', 0, '2024-12-06 20:28:27', ' Freehold Games', ' Kitfox Games', 18, 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'Đỗ Trung Hiếu', '0972862685', 'trunghieudo1509@gmail.com', '123456', 1, '2024-11-18 20:17:57'),
(3, 'test', '123456457', 'test@gmail.com', '123456', 0, '2024-11-18 20:26:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
