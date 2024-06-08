-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 11:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `propertycompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_email` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `firstname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `surname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_email`, `password`, `firstname`, `surname`) VALUES
('joebloggs@gmail.com', 'joebloggs', 'Joe', 'Bloggs'),
('marysmyth@gmail.com', 'marysmyth', 'Mary', 'Smyth'),
('mikedunne@gmail.com', 'mikedunne', 'Mike', 'Dunne');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`) VALUES
(1, 'residential'),
(2, 'commercial'),
(3, 'site');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `author_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `author_email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `message` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `author_name`, `phone`, `author_email`, `message`, `created_at`) VALUES
(1, 'First message test', 'D H', 303000124, 'test1@gmail.com', 'This is my first test for submitting a message.', '2024-05-14 16:13:30'),
(6, 'Galway', 'Sarah Keane', 110802928, 'sarahkeane@gmail.com', 'Hello! I am looking for a 3 bedroom home in Galway, can you help please?', '2024-05-26 18:37:48'),
(7, 'Sell', 'Bill Walsh', 97373628, 'billwalsh@hotmail.com', 'I am looking to sell my property, can you help me with this?', '2024-05-26 18:38:33');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `propertyid` int(11) NOT NULL,
  `address1` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `town` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `county` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` double NOT NULL,
  `bedrooms` int(2) DEFAULT NULL,
  `shortdescription` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `longdescription` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image2` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `image3` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `image4` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `image5` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `categoryid` int(11) NOT NULL,
  `vendor_email` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `energyrating` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `squaremetres` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`propertyid`, `address1`, `town`, `county`, `price`, `bedrooms`, `shortdescription`, `longdescription`, `image`, `image2`, `image3`, `image4`, `image5`, `categoryid`, `vendor_email`, `energyrating`, `squaremetres`) VALUES
(1, 'Seaview House', 'Skerries', 'Dublin', 4000000, 6, 'This property is a beautiful, modern spacious home situated next to the sea.', 'Discover unparalleled luxury in this expansive modern mansion located on the pristine shores of Ireland. This breathtaking property offers an impressive 267 square meters of living space, designed to maximize comfort and elegance. Nestled right next to the beach, the mansion boasts stunning panoramic views of the ocean and surrounding landscape, creating a serene and picturesque setting.\r\n\r\nThe interior of the home features light-filled rooms with floor-to-ceiling windows, showcasing the magnificent views from every angle. The spacious open-plan living area seamlessly connects to a state-of-the-art kitchen, perfect for entertaining. Luxurious finishes and high-end appliances enhance the sophisticated ambiance throughout.\r\n\r\nThe mansion includes multiple bedrooms, each with its own en-suite bathroom, providing ultimate privacy and comfort. Outdoor living is equally impressive, with a beautifully landscaped garden and direct beach access, ideal for enjoying the natural beauty of the coast. This property offers a rare opportunity to own a slice of paradise in a coveted beachfront location.', 'images/TheLakehouse/thelakehouse1.jpg', 'images/TheLakehouse/thelakehouse2.jpg', 'images/TheLakehouse/thelakehouse3.jpg', 'images/TheLakehouse/thelakehouse4.jpg', 'images/TheLakehouse/thelakehouse5.jpg', 1, 'claremurphy@gmail.com', 'A2', 268),
(2, 'Glinmor', 'Tuam', 'Galway', 799999, 0, 'Fantastic opportunity to purchase a location with a number of buildings in Tuam, Galway.', 'For Sale: Prime commercial property in Tuam, Galway, spanning 1 acre and featuring four separate buildings, perfect for shops or storage facilities. This versatile property offers immense potential for various business ventures. Each building is well-maintained and ready for immediate use.\r\n\r\nConveniently situated near essential amenities, including a supermarket, popular café, and a community center, this location ensures steady customer flow and accessibility. Ample parking space is available for both customers and staff. Whether you\'re looking to expand your business or invest in a lucrative commercial property, this opportunity in Tuam is not to be missed. Explore the possibilities and make this prime location the cornerstone of your success.', 'images/commercial/killimor/killimor1.jpg', 'images/commercial/killimor/killimor2.jpg', 'images/commercial/killimor/killimor3.jpg', 'images/commercial/killimor/killimor4.jpg', 'images/commercial/killimor/killimor5.jpg', 2, 'davekelly@gmail.com', '', 1152),
(3, 'Riversite', 'Caoil beag', 'Waterford', 290000, 0, 'Large, elevated site with fantastic river views.', 'For Sale: Exceptional 1.5-acre site in the picturesque surroundings of Riversite, Waterford, offering stunning views and a serene, natural setting. This unique property is perfect for those looking to build their dream home or retreat amidst Ireland\'s beautiful landscape. Nestled near a tranquil river, the site provides an idyllic backdrop with the soothing sounds of flowing water and lush greenery all around.\r\n\r\nThe property is easily accessible yet offers a sense of seclusion, making it an ideal escape from the hustle and bustle of city life. Imagine waking up to panoramic vistas, enjoying peaceful walks along the river, and experiencing the abundant wildlife in this nature lover\'s paradise. With ample space for creative development, this site offers endless possibilities for creating a private sanctuary tailored to your desires. Embrace the opportunity to own a piece of Waterford\'s natural beauty and make this stunning location your own.', 'images/sites/coolbunia/coolbunia1.jpg', 'images/sites/coolbunia/coolbunia2.jpg', 'images/sites/coolbunia/coolbunia3.jpg', 'images/sites/coolbunia/coolbunia4.jpg', 'images/sites/coolbunia/coolbunia5.jpg', 3, 'johnwalsh@hotmail.com', '', 6330),
(4, 'Cois Farraige', 'Valentia Island', 'Kerry', 500000, 3, '3 Bedroom Detached house by the sea.', 'For Sale: Charming three-bedroom detached house on the breathtaking Valentia Island, off the coast of Kerry. This exquisite property offers a perfect blend of comfort and natural beauty, with unparalleled views of the sea. The house is thoughtfully designed to maximize the stunning vistas, with large windows that flood the interiors with natural light and showcase the panoramic ocean scenery.\r\n\r\nThe spacious living area features an open-plan layout, seamlessly connecting the modern kitchen, dining, and lounge areas. Each of the three well-appointed bedrooms offers serene sea views, making every morning a delightful experience. The master bedroom includes an en-suite bathroom, providing a private retreat within the home.\r\n\r\nOutside, the property boasts a beautifully landscaped garden, perfect for outdoor relaxation and entertaining while enjoying the sea breeze. Valentia Island\'s charming community and rich history add to the appeal, making this home an ideal haven for both year-round living and holiday getaways. Embrace coastal living at its finest with this remarkable property.', 'images/CoarhaMore/coarhamore1.jpg', 'images/CoarhaMore/coarhamore2.jpg', 'images/CoarhaMore/coarhamore3.jpg', 'images/CoarhaMore/coarhamore4.jpg', 'images/CoarhaMore/coarhamore5.jpg', 1, 'davekelly@gmail.com', 'B2', 200),
(5, 'Coill', 'Tipperary Town', 'Tipperary', 210000, 0, '1 acre site in Tipperary town', 'Opportunity awaits at this prime development site in the heart of Tipperary town. Spanning 1 acre, this strategically located plot presents a blank canvas for realizing your vision. Whether you\'re planning residential, commercial, or mixed-use development, the possibilities are endless. Situated within close proximity to amenities such as shops, schools, and public transportation, this site offers convenience and accessibility. With its central location and ample space for construction, it\'s an ideal investment opportunity for developers or entrepreneurs looking to make their mark in this vibrant community. Don\'t miss out on the chance to shape the future of Tipperary with this exceptional development site.', 'images/sites/clonmelroad/clonmelroad1.jpg', 'images/sites/clonmelroad/clonmelroad2.jpg', 'images/sites/clonmelroad/clonmelroad3.jpg', 'images/sites/clonmelroad/clonmelroad4.jpg', 'images/sites/clonmelroad/clonmelroad5.jpg', 3, 'davekelly@gmail.com', '', 3900),
(6, 'Gortahalla', 'Mullingar', 'Westmeath', 445000, 5, 'Spacious family home outside of Mullingar, Westmeath', 'Introducing a stunning five-bedroom detached house nestled on half an acre of pristine land, offering the ultimate blend of luxury and tranquility. This spacious residence boasts ample room both inside and out, providing a perfect haven for families seeking comfort and space. The generous living areas are complemented by large windows, flooding the interior with natural light and offering picturesque views of the surrounding landscape.\r\n\r\nThe modern kitchen features high-end appliances and ample storage, making it ideal for culinary enthusiasts. Each of the five bedrooms is generously sized, offering privacy and relaxation for every member of the household. Outside, the expansive grounds provide endless opportunities for outdoor activities, from gardening to entertaining guests.\r\n\r\nLocated in a peaceful setting with plenty of space around it, this property offers a rare opportunity to enjoy country living at its finest while still being within easy reach of amenities and conveniences. Don\'t miss out on the chance to make this dream home yours.', 'images/KilkennyAbbey/kilkennyabbey1.jpg', 'images/KilkennyAbbey/kilkennyabbey2.jpg', 'images/KilkennyAbbey/kilkennyabbey3.jpg', 'images/KilkennyAbbey/kilkennyabbey4.jpg', 'images/KilkennyAbbey/kilkennyabbey5.jpg', 1, 'claremurphy@gmail.com', 'B3', 190),
(7, 'Tramor', 'Dunmore East', 'Waterford', 340000, 6, '6 Bedroom detached home in Dunmore East.', 'Nestled in the tranquil countryside, just a stone\'s throw away from the captivating sea, sits this remarkable detached house with six bedrooms. Once a care facility, this property has been thoughtfully converted into a spacious and inviting family home, blending modern comforts with the charm of its original structure.\r\n\r\nThe expansive interior offers ample space for both relaxation and entertainment, with generously sized bedrooms providing privacy and comfort for all residents. Large windows throughout the house frame breathtaking views of the surrounding countryside and distant ocean, creating a serene and picturesque ambiance.\r\n\r\nThe property\'s countryside location ensures peace and seclusion, while its proximity to the sea offers endless opportunities for coastal adventures and exploration. Whether you\'re seeking a permanent residence or a holiday retreat, this unique home provides a rare opportunity to enjoy the best of both worlds – the tranquility of rural living and the beauty of coastal landscapes.\r\nWith a total living area of 318 sq.m. / 3,423 sq.ft, this impressive holiday home is presented to the market with a modern kitchen including all appliances and a utility room with large capacity washing machine and dryer for added convenience. The property is flawlessly presented, boasting a neutral color palette and high-quality finishes throughout.', 'images/CoisCuain/coiscuain1.jpg', 'images/CoisCuain/coiscuain2.jpg', 'images/CoisCuain/coiscuain3.jpg', 'images/CoisCuain/coiscuain4.jpg', 'images/CoisCuain/coiscuain5.jpg', 1, 'janeryan@gmail.com', 'B3', 330),
(8, 'Plot 1, Ballybrit Industrial Estate', 'Ballybrit', 'Galway', 1200000, 0, '2 acre site with development potential', 'Located 5 minutes\' drive from Junction 19 of the M6 (Galway-Dublin) Motorway & 10 minutes from Galway City via the N83 Site suitable for a number of commercial uses (subject to planning): -Motor show room -Logistics -Warehousing -Bulky Retail -Light Industrial -Enterprise & Commercial.', 'images/commercial/PlotB/PlotB1.jpg', 'images/commercial/PlotB/PlotB2.jpg', 'images/commercial/PlotB/PlotB3.jpg', 'images/commercial/PlotB/PlotB4.jpg', 'images/commercial/PlotB/PlotB5.jpg', 2, 'davekelly@gmail.com', '', 9000),
(9, 'Red House, The Long Walk', 'Galway City', 'Galway', 725000, 3, 'Beautiful terraced house in the middle of Galway city.', 'This terraced house offers contemporary living at its finest, with stunning views of the picturesque Corrib River. Step inside to discover a stylish interior boasting sleek design and ample natural light.\r\n\r\nThe open-plan layout seamlessly connects the living, dining, and kitchen areas, creating an ideal space for both relaxing and entertaining. Upstairs, the bedrooms provide comfort and tranquility, with panoramic views of the river serving as a captivating backdrop.\r\n\r\nWith its prime location on the Long Walk, this house provides easy access to Galway\'s vibrant city center, cultural attractions, and bustling waterfront. Experience urban living at its best in this stunning riverside retreat.', 'images/LongWalk/longwalk1.jpg', 'images/LongWalk/longwalk2.jpg', 'images/LongWalk/longwalk3.jpg', 'images/LongWalk/longwalk4.jpg', 'images/LongWalk/longwalk5.jpg', 1, 'johnwalsh@hotmail.com', 'C2', 140),
(10, 'Greenfields', 'Ballina', 'Mayo', 589000, 0, '50 acres of agricultural land in Ballina, Mayo.', 'Discover the potential of this expansive agricultural land just outside Ballina, Mayo. Spanning acres of fertile soil, this site offers a prime opportunity for farming, grazing, or investment purposes. Situated in a picturesque rural setting, it provides a peaceful retreat while remaining within easy reach of Ballina\'s amenities and conveniences. Whether you\'re looking to expand your agricultural operations or create a private estate, this land offers endless possibilities for realizing your vision. Embrace the beauty of Mayo\'s countryside and make this expansive parcel of land your own.', 'images/sites/Kilmaine/kilmaine1.jpg', 'images/sites/Kilmaine/kilmaine2.jpg', 'images/sites/Kilmaine/kilmaine3.jpg', 'images/sites/Kilmaine/kilmaine4.jpg', 'images/sites/Kilmaine/kilmaine5.jpg', 3, 'claremurphy@gmail.com', '', 212000),
(11, 'No. 1 Parkmore Ind Est', 'Parkmore', 'Galway', 2100000, 0, 'Large and modern office space in Parkmore Industrial Estate, Galway', 'Explore the potential of this expansive office space situated in the heart of Galway\'s thriving Parkmore Industrial Estate. Boasting a modern design and ample square footage, this property offers a dynamic workspace for businesses of all sizes. The sleek interior features contemporary finishes and state-of-the-art amenities, creating an environment conducive to productivity and collaboration.\r\n\r\nConveniently located just a short distance from Galway city center, this office space provides easy access to a wide range of amenities, including restaurants, shops, and transportation links. Whether you\'re a startup looking to establish a presence or a growing company in need of additional space, this versatile office is sure to exceed your expectations. Don\'t miss out on the opportunity to elevate your business in this prime location in Parkmore Industrial Estate.', 'images/commercial/cityeast/cityeast1.jpg', 'images/commercial/cityeast/cityeast2.jpg', 'images/commercial/cityeast/cityeast3.jpg', 'images/commercial/cityeast/cityeast4.jpg', 'images/commercial/cityeast/cityeast5.jpg', 2, 'davekelly@gmail.com', 'C1', 6000),
(12, 'Newhaven', 'Raheen', 'Limerick', 30000, 0, '0.5 acre site outside of Raheen, Limerick.', 'Fantastic opportunity for a 0.5 acre site just outside of Raheen, County Limerick. This site requires planning permission although if granted, the owner has access to a great opportunity.', 'images/sites/knocknacrohy/k1.jpg', 'images/sites/knocknacrohy/k2.jpg', 'images/sites/knocknacrohy/k3.jpg', 'images/sites/knocknacrohy/k4.jpg', 'images/sites/knocknacrohy/k5.jpg', 3, 'claremurphy@gmail.com', '', 2400),
(13, '3 O\'Connell Street', 'Limerick City', 'Limerick', 280000, 0, 'Office spaces spanning a 4 story building. This is a fantastic opportunity for business owners', 'Discover a prime opportunity in the heart of Limerick City with this impressive four-story office building. Offering a central location and versatile space, this property is perfect for businesses seeking a strategic foothold in one of Ireland\'s most dynamic cities. Each floor provides ample room for offices, meeting areas, and collaborative spaces, accommodating the needs of modern enterprises.\r\n\r\nThe building\'s historic charm adds character to its interiors while blending seamlessly with the vibrant energy of Limerick City. With its convenient location near shops, restaurants, and public transportation, this office building promises convenience and accessibility for employees and clients alike. Don\'t miss the chance to establish your business in this thriving urban center and unlock its full potential for growth and success.', 'images/commercial/mallow/m1.jpg', 'images/commercial/mallow/m2.jpg', 'images/commercial/mallow/m3.jpg', 'images/commercial/mallow/m4.jpg', 'images/commercial/mallow/m5.jpg', 2, 'janeryan@gmail.com', 'D1', 180),
(14, 'Glasan', 'Naas', 'Kildare', 99000, 0, 'Beautiful site situated on 6 acres outside of Naas, Kildare.', 'Nestled in the tranquil countryside just outside Naas, Kildare, this expansive 6-acre site offers a perfect blend of rural charm and convenience. The property boasts rolling green pastures, ideal for equestrian pursuits, farming, or simply enjoying the serene landscape. Mature trees dot the landscape, providing privacy and a picturesque backdrop.\r\n\r\nSituated a short drive from the bustling town of Naas, the site enjoys easy access to local amenities, schools, and transport links, including the M7 motorway. The land’s gentle topography presents an excellent opportunity for building a dream home or developing a bespoke estate, with ample space for gardens, outbuildings, or recreational facilities.', 'images/sites/slievemore/s1.jpg', 'images/sites/slievemore/s2.jpg', 'images/sites/slievemore/s3.jpg', 'images/sites/slievemore/s4.jpg', 'images/sites/slievemore/s5.jpg', 3, 'claremurphy@gmail.com', '', 25900),
(15, 'Ard Fraoigh', 'Castlerea', 'Roscommon', 340000, 4, 'Large, detached, 4 bedroom home available for sale outside of Castlerea, Roscommon.', 'Escape to the tranquility of the countryside with this charming four-bedroom detached house just outside Castlerea, Roscommon. Set amidst picturesque rural landscapes, this property offers a peaceful retreat from the hustle and bustle of city life. The spacious interior boasts four well-appointed bedrooms, providing ample space for family living or hosting guests.\r\n\r\nStep outside and discover a sprawling garden enveloping the house, offering endless opportunities for outdoor relaxation and recreation. Whether you\'re enjoying a morning coffee on the patio or tending to your flower beds, the serene ambiance of the countryside surrounds you.\r\n\r\nWith its idyllic setting and spacious grounds, this property is the perfect place to call home for those seeking a slower pace of life in the heart of rural Ireland. Don\'t miss out on the chance to experience the beauty and tranquility of country living in Castlerea, Roscommon.\r\nThe heart of the home lies in the open-plan kitchen and dining area (7.31 x 3.83), where you will appreciate the beech shaker-style kitchen units complemented by a waste disposal unit and integrated dishwasher, built-in oven, hob & extractor fan. Adjacent to this is an extra-large laundry room (4.03 x 3.24) and a convenient ground-floor WC (1.38 x 1.94).\r\n\r\nAscend the sweeping staircase from the elegant hallway (measuring 3.23 x 3.69) to discover the tranquil sleeping quarters. \r\n\r\nThe master bedroom (4.00 x 4.17) offers a luxurious ensuite (2.46 x 1.81), while three additional bedrooms provide ample space for family members or guests. \r\n\r\nThe master bathroom measures 3.16 x 2.71 with a Jacuzzi bath, free-standing shower, WC and vanity unit.\r\n\r\nAn added bonus is the part floored Attic space with a light & fixed folding ladder for access.', 'images/Ballybranigan/b1.jpg', 'images/Ballybranigan/b2.jpg', 'images/Ballybranigan/b3.jpg', 'images/Ballybranigan/b4.jpg', 'images/Ballybranigan/b5.jpg', 1, 'johnwalsh@hotmail.com', 'C2', 200),
(16, 'Childcare Facility', 'Dundalk', 'Louth', 580000, 0, 'Brand new commercial childcare facility available for sale in Dundalk, Louth.', 'Welcome to the future of childcare in Dundalk, Louth, with this brand-new, state-of-the-art facility. Designed to meet the needs of modern families, this property offers a safe, stimulating environment where children can learn, grow, and thrive. Featuring bright, spacious classrooms and dedicated play areas, the facility provides the perfect setting for early childhood education and development.\r\n\r\nThe property also includes an outdoor playground, allowing children to explore and play in a natural environment. With its convenient location in Dundalk, families have easy access to local amenities and transportation links, making drop-offs and pick-ups a breeze.\r\n\r\nIf you are an investor looking for a lucrative opportunity in the thriving childcare sector, this property offers endless potential. Don\'t miss out on the chance to be part of Dundalk\'s vibrant community and shape the future of childcare in Louth.', 'images/commercial/creche/c1.jpg', 'images/commercial/creche/c2.jpg', 'images/commercial/creche/c3.jpg', 'images/commercial/creche/c4.jpg', 'images/commercial/creche/c5.jpg', 2, 'janeryan@gmail.com', 'B1', 360),
(17, 'Ballydav', 'Clonmel', 'Tipperary', 60000, 0, 'Picturesque 0.5 acre site available outside of Clonmel, Tipperary', 'Discover the scenic countryside outside Clonmel, Tipperary, from this captivating site. Enveloped by sweeping vistas and natural splendor, this location offers an idyllic escape from the hustle and bustle. Imagine crafting your dream home amidst lush greenery and rolling hills, creating a tranquil sanctuary away from the noise of everyday life. Whether you seek a peaceful retreat or a weekend getaway, this site provides the perfect backdrop for your aspirations. Embrace the tranquility and beauty of rural Tipperary from this stunning countryside site, ideal for developing your dream house.', 'images/sites/cooldevanne/c1.jpg', 'images/sites/cooldevanne/c2.jpg', 'images/sites/cooldevanne/c3.jpg', 'images/sites/cooldevanne/c4.jpg', 'images/sites/cooldevanne/c5.jpg', 3, 'davekelly@gmail.com', '', 2000),
(18, '18 The Liberties', 'Dublin City', 'Dublin', 710000, 0, 'Multi-story commercial unit available in the heart of the Liberties, Dublin City', 'Discover the perfect commercial hub in the heart of Dublin City with this impressive three-story office space. Ideally located for businesses seeking a prime address, this property offers ample space for offices across multiple floors. With its versatile layout, it\'s also ideal for incorporating a retail unit on the ground floor, attracting foot traffic and enhancing visibility. Benefit from the vibrant atmosphere of Dublin\'s bustling streets while enjoying the convenience of modern amenities and transportation links. Whether you\'re a startup looking to establish a presence or a growing enterprise in need of expansion, this office space offers endless possibilities for success.', 'images/commercial/32/1.jpg', 'images/commercial/32/2.jpg', 'images/commercial/32/3.jpg', 'images/commercial/32/4.jpg', 'images/commercial/32/5.jpg', 2, 'janeryan@gmail.com', 'D2', 290);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `author_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `author_email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','planned') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `content`, `author_name`, `author_email`, `created_at`, `status`) VALUES
(8, 'Fantastic', 'ABC Ltd were fantastic! They helped us find our home!', 'Mary Jones', '123@gmail.com', '2024-05-26 18:31:49', 'planned'),
(9, 'Great Service', 'ABC Ltd made it very easy for me to find a suitable property.', 'Jim Daly', 'jimdaly@gmail.com', '2024-05-26 18:32:36', 'pending'),
(10, 'Value', 'This company helped us to find a property that was affordable!\r\n\r\nGreat company!', 'Helen Murphy', 'helenmurphy@gmail.com', '2024-05-26 18:33:32', 'planned'),
(11, 'Range', 'Very friendly and helpful staff with a great range of properties!', 'Conor Smyth', 'conorsmyth@hotmail.com', '2024-05-26 18:34:19', 'pending'),
(12, 'Detail', 'Great attention to detail from start to finish!\r\n\r\nHighly recommend!', 'Joe Farrell', 'joefarrell@gmail.com', '2024-05-26 18:35:20', 'planned');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_email` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `vendor_firstname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `vendor_surname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `vendor_phone` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_email`, `vendor_firstname`, `vendor_surname`, `vendor_phone`) VALUES
('ab@gmail.com', 'aaron', 'burke', '0092878286282'),
('claremurphy@gmail.com', 'Clare', 'Murphy', '0881918756'),
('davekelly@gmail.com', 'Dave', 'Kelly', '0899432101'),
('helenmurphy@gmail.com', 'helen', 'Murphy', '0901272337'),
('jamesdaly@gmail.com', 'james', 'Daly', '0904773838'),
('janeryan@gmail.com', 'Jane', 'Ryan', '0812237878'),
('jerryred@gmail.com', 'jerry', 'red', '0101819811'),
('jimduggan@gmail.com', 'jim', 'duggan', '0819018229827'),
('joedaly@gmail.com', 'Joe', 'Daly', '0904578321'),
('johnwalsh@hotmail.com', 'John', 'Walsh', '0804435854');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`propertyid`),
  ADD KEY `propertyvendor` (`vendor_email`),
  ADD KEY `propertycategory` (`categoryid`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `propertyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `propertycategory` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryid`),
  ADD CONSTRAINT `propertyvendor` FOREIGN KEY (`vendor_email`) REFERENCES `vendor` (`vendor_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
