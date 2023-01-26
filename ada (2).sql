-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 24, 2022 at 02:50 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ada`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_trainer`
--

DROP TABLE IF EXISTS `add_trainer`;
CREATE TABLE IF NOT EXISTS `add_trainer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `choose_trainer` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_trainer`
--

INSERT INTO `add_trainer` (`id`, `username`, `phone`, `choose_trainer`, `user_id`) VALUES
(4, 'dharmik', 9313283596, 'aryan', 15),
(5, 'sumit', 9313297856, 'akash', 16),
(6, 'dharmik', 9313283596, 'akash', 15);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

DROP TABLE IF EXISTS `feedback_tbl`;
CREATE TABLE IF NOT EXISTS `feedback_tbl` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`feedback_id`, `email`, `feedback`, `user_id`) VALUES
(3, 'sumit543@gmail.com', 'Plan is Good', 16),
(4, 'dharmik123@gmail.com', 'Product is better\r\n', 15),
(5, 'dharmik123@gmail.com', 'Product is better', 15);

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

DROP TABLE IF EXISTS `order_tbl`;
CREATE TABLE IF NOT EXISTS `order_tbl` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `P_ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `P_ID` (`P_ID`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`order_id`, `name`, `address`, `city`, `state`, `phone`, `email`, `P_ID`, `user_id`) VALUES
(23, 'Dharmik', 'Idar', 'Idar', 'Gujarat', 9313283596, 'dharmik123@gmail.com', 14, 15),
(24, 'Sumit', 'Modasa', 'Modasa', 'Gujarat', 9313297856, 'sumit543@gmail.com', 15, 16),
(25, 'Dharmik', 'Idar', 'Idar', 'Gujarat', 9313283596, 'dharmik123@gmail.com', 14, 15);

-- --------------------------------------------------------

--
-- Table structure for table `plan_tbl`
--

DROP TABLE IF EXISTS `plan_tbl`;
CREATE TABLE IF NOT EXISTS `plan_tbl` (
  `plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_name` text NOT NULL,
  `plan_desc` text NOT NULL,
  `plan_type` varchar(20) NOT NULL,
  PRIMARY KEY (`plan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan_tbl`
--

INSERT INTO `plan_tbl` (`plan_id`, `plan_name`, `plan_desc`, `plan_type`) VALUES
(5, '1. The Mediterranean Diet', 'The Mediterranean diet has long been considered the gold standard for nutrition, disease prevention, wellness, and longevity. This is based on its nutrition benefits and sustainability. How it works The Mediterranean diet is based on foods that people in countries like Italy and Greece have traditionally eaten. It is rich in:  vegetables fruits whole grains fish nuts lentils olive oil Foods such as poultry, eggs, and dairy products are to be eaten in moderation, and red meats are limited.  Additionally, the Mediterranean diet limits:  refined grains trans fats processed meats added sugar other highly processed foods Health benefits This dietâ€™s emphasis on minimally processed foods and plants has been associated with a reduced risk of multiple chronic diseases and increased life expectancy. Studies also show that the Mediterranean diet has a preventive effect against certain cancers (1Trusted Source).  Though the diet was designed to lower heart disease risk, numerous studies indicate that its plant-based, high unsaturated fat dietary pattern can also aid in weight loss (2).  A systematic review analyzing five different studies found that, compared with a low fat diet, the Mediterranean diet resulted in greater weight loss after 1 year. Compared with a low carb diet, it produced similar weight loss results (3Trusted Source).  One study in more than 500 adults over 12 months found that higher adherence to a Mediterranean diet was associated with double the likelihood of weight loss maintenance (4Trusted Source).  Additionally, the Mediterranean diet encourages eating plenty of antioxidant-rich foods, which may help combat inflammation and oxidative stress by neutralizing free radicals (5Trusted Source).  Other benefits Recent studies have also found that the Mediterranean diet is associated with decreased risk of mental disorders, including cognitive decline and depression (6Trusted Source).  Eating less meat is also associated with a more sustainable diet for the planet.', 'Diet'),
(6, '2. The DASH diet', 'Dietary Approaches to Stop Hypertension, or DASH, is an eating plan designed to help treat or prevent high blood pressure, which is clinically known as hypertension.  It emphasizes eating plenty of fruits, vegetables, whole grains, and lean meats. It is low in salt, red meat, added sugars, and fat.  While the DASH diet is not a weight loss diet, many people report losing weight on it.  How it works The DASH diet recommends specific servings of different food groups. The number of servings you are encouraged to eat depends on your daily calorie intake.  For example, each day an average person on the DASH diet would eat about:  five servings of vegetables five servings of fruit seven servings of healthy carbs like whole grains two servings of low fat dairy products two servings or fewer of lean meats In addition, itâ€™s recommended to consume nuts and seeds two to three times per week (7Trusted Source).  Health benefits The DASH diet has been shown to reduce blood pressure levels and several heart disease risk factors. Also, it may help lower your risk of breast and colorectal cancers (7Trusted Source, 8Trusted Source, 9Trusted Source, 10Trusted Source, 11Trusted Source).  Studies show that the DASH diet can also help you lose weight. For example, an analysis of 13 studies found that people on the DASH diet lost more weight over 8â€“24 weeks than people on a control diet (12Trusted Source).  Another study in adults with obesity over 12 weeks found that the DASH diet helped decrease total body weight, body fat percentage, and absolute fat mass in study participants while preserving muscle strength (13Trusted Source).  Other benefits In addition to weight loss, the DASH diet may help combat depression symptoms (14Trusted Source).  A comparative study over 8 years found that even moderate adherence to the DASH diet was related to lower depression risk (15Trusted Source).  Downsides While the DASH diet may aid with weight loss and lower blood pressure in individuals with hypertension, there is mixed evidence on salt intake and blood pressure.  Eating too little salt has been linked to increased insulin resistance, and a low sodium diet isnâ€™t the right choice for everyone.  A low sodium diet like the DASH diet is more appropriate for individuals with hypertension or other health conditions that benefit from or require sodium restriction (16Trusted Source).  More research is needed in this area to understand how a low sodium diet can affect insulin resistance in individuals without hypertension.', 'Diet'),
(8, '3. Plant-based and flexitarian diet', 'Vegetarianism and veganism are the most popular versions of plant-based diets, which restrict animal products for health, ethical, and environmental reasons.  However, more flexible plant-based diets also exist, such as the flexitarian diet. This is a plant-based diet that allows eating animal products in moderation.  How it works Typical vegetarian diets restrict meat of all kinds but allow dairy products. Typical vegan diets restrict all animal products, including dairy, butter, and sometimes other byproducts like honey.  The flexitarian eating plan does not have clear-cut rules or recommendations about calories and macronutrients, so itâ€™s considered more of a lifestyle than a diet. Its principles include:  consuming protein from plants instead of animals eating mostly fruits, vegetables, legumes, and whole grains eating the least processed, most natural forms of foods limiting sugar and sweets Additionally, it allows the flexibility to consume meat and animal products from time to time.  Health benefits Numerous studies have shown that plant-based diets can reduce your risk of developing chronic diseases, including improved markers of metabolic health, decreased blood pressure, and reduced risk of type 2 diabetes. They can also help you lose weight (17Trusted Source).  Flexitarian diets have also been shown to reduce the risk of type 2 diabetes and improve metabolic health and blood pressure, plus may have their own weight loss benefits. (18Trusted Source).  Other benefits For those who are looking to lead a sustainable lifestyle, decreasing your meat consumption can also reduce greenhouse gas emissions, deforestation, and soil degradation (19).  Downsides Plant-based eating patterns like vegetarianism and veganism can sometimes be difficult to maintain and may feel restricting, especially if youâ€™re switching from a more meat-based eating style.  And while the flexibility of the flexitarian diet makes it easy to follow, being too flexible with it may counteract its benefits.', 'Diet'),
(9, '4. The MIND diet', 'The Mediterranean-DASH Intervention for Neurodegenerative Delay (MIND) diet combines aspects of the Mediterranean and DASH diets to create an eating pattern that focuses on brain health.  How it works Like the flexitarian diet, the MIND diet does not have a strict meal plan, but instead encourages eating 10 specific foods with brain health benefits.  Per week, MIND includes eating:  six or more servings of green, leafy vegetables one serving of non-starchy vegetables five or more servings of nuts Other foods it encourages multiple times a week include:  berries beans olive oil whole grains fish poultry Health benefits Research shows that the MIND diet may reduce a personâ€™s risk of developing Alzheimerâ€™s disease, and studies show that the MIND diet is superior to other plant-rich diets for improving cognition (20Trusted Source, 21Trusted Source).  Research also shows that the MIND diet can help slow cognitive decline and improve resiliency in older adults (22Trusted Source).  It may also help delay the onset of the movement disorder Parkinsonâ€™s disease (23Trusted Source).  There is little research concerning the MIND diet and weight loss. Yet, since it is a combination of two diets that promote weight loss, the MIND diet may also help you lose weight.  One way it can help promote weight loss is that it encourages limiting your consumption of foods like:  butter cheese red meat fried food sweets However, more research needs to be done concerning the MIND diet and weight loss.  Other benefits By combining the best of two diets, the MIND diet has a lot to offer and offers some more flexibility than stricter diets.  While you can eat more than the 10 food groups it recommends, the closer you stick to the diet, the better your results may be.', 'Diet'),
(10, '5. WW (formerly Weight Watchers)', 'WW, formerly Weight Watchers, is one of the most popular weight loss programs worldwide.  While it doesnâ€™t restrict any food groups, people on a WW plan must eat within their set number of daily points to help them reach their ideal weight (24Trusted Source).  How it works WW is a points-based system that assigns different foods and beverages a value, depending on their calorie, fat, and fiber contents.  As you work to reach your desired weight, you must stay within your daily point allowance.  Health benefits Many studies show that the WW program can help you lose weight (25Trusted Source).  For example, a review of 45 studies found that people who followed a WW diet lost 2.6% more weight than people who received standard counseling (26Trusted Source).  Whatâ€™s more, people who follow WW programs have been shown to be more successful at maintaining weight loss after several years, compared with those who follow other diets (27Trusted Source, 28Trusted Source).  Other benefits WW allows flexibility, which makes it easy to follow. This enables people with dietary restrictions, such as those with food allergies, to adhere to the plan.  Downsides While it allows for flexibility, WW can be costly depending on the subscription plan and the length of time you intend to follow it.  Studies show that it may take up to 52 weeks to produce significant weight loss and clinical benefits (27Trusted Source).  Additionally, its flexibility can be a downfall if dieters choose unhealthy foods.', 'Diet'),
(11, 'At-home workout routine for men', 'Whether youâ€™re a seasoned expert or new to strength training, working out at home is a great option when you canâ€™t get to the gym or need a change of pace.  The at-home workouts below require a limited amount of equipment. Plus, some of the movements can be substituted for bodyweight exercises in which you use your bodyâ€™s own weight as resistance.  These exercises can serve as a weeklong beginner routine or be cycled to provide several sessions per week for advanced trainees.  If your goal is weight loss, you can add a form of cardio, such as running or cycling, between sessions.  Equipment required: flat weight bench, appropriate adjustable dumbbells based on your level of experience  If youâ€™re just starting out, you may want to visit a specialty store to get expert advice on selecting the right equipment. But if you know what youâ€™re looking for, you can purchase adjustable dumbbells online.  Rest intervals: 60â€“90 seconds  Day 1: Legs, shoulders, and abs Legs: dumbbell squats â€” 3 sets of 6â€“8 reps Shoulders: standing shoulder press â€” 3 sets of 6â€“8 reps Legs: dumbbell lunge â€” 2 sets of 8â€“10 reps per leg Shoulders: dumbbell upright rows â€” 2 sets of 8â€“10 reps Hamstrings: Romanian dumbbell deadlift â€” 2 sets of 6â€“8 reps Shoulders: lateral raises â€” 3 sets of 8â€“10 reps Calves: seated calf raises â€” 4 sets of 10â€“12 reps Abs: crunches with legs elevated â€” 3 sets of 10â€“12 reps Day 2: Chest and back Chest: dumbbell bench press or floor press â€” 3 sets of 6â€“8 reps Back: dumbbell bent-over rows â€” 3 sets of 6â€“8 reps Chest: dumbbell fly â€” 3 sets of 8â€“10 reps Back: one-arm dumbbell rows â€” 3 sets of 6â€“8 reps Chest: pushups â€” 3 sets of 10â€“12 reps Back/chest: dumbbell pullovers â€” 3 sets of 10â€“12 reps Day 3: Arms and abs Biceps: alternating biceps curls â€” 3 sets of 8â€“10 reps per arm Triceps: overhead triceps extensions â€” 3 sets of 8â€“10 reps Biceps: seated dumbbell curls â€” 2 sets of 10â€“12 reps per arm Triceps: bench dips â€” 2 sets of 10â€“12 reps Biceps: concentration curls â€” 3 sets of 10â€“12 reps Triceps: dumbbell kickbacks â€” 3 sets of 8â€“10 reps per arm Abs: planks â€” 3 sets of 30-second holds', 'Workout'),
(13, 'Beginnerâ€™s workout routine for men', 'Starting out in the gym can seem intimidating, but with proper guidance, the process becomes more approachable â€” and even invigorating.  As a beginner, you can progress very quickly because almost any exercise promotes muscle and strength gains. Still, itâ€™s important to avoid overexertion, which can lead to injuries or decreased performance.  This workout routine has you in the gym 3 days per week (such as Monday, Wednesday, and Friday), with full-body sessions completed each day. This allows you to get used to new movements, focus on proper form, and take time to recover.  You can add reps and sets as needed as you progress.  The beginner phase should last as long as you continue to improve. Some people may plateau at around 6 months, whereas others may continue to see results for more than a year.  Equipment required: fully equipped gym  Rest periods: 90â€“180 seconds for main movements, 60â€“90 seconds for accessories  Intensity: Select a weight that allows you to complete the prescribed reps while leaving about 2 solid reps in the tank.  Day 1: Full body Legs: barbell back squats â€” 3 sets of 5 reps Chest: flat barbell bench press â€” 3 set of 5 reps Back: seated cable rows â€” 3 sets of 6â€“8 reps Shoulders: seated dumbbell shoulder press â€” 3 sets of 6â€“8 reps Triceps: cable rope triceps pushdowns â€” 3 sets of 8â€“10 reps Shoulders: lateral raises â€” 3 sets of 10â€“12 reps Calves: seated calf raises â€” 3 sets of 10â€“12 reps Abs: planks â€” 3 sets of 30-second holds Day 2: Full body Back/hamstrings: barbell or trap bar deadlifts â€” 3 sets of 5 reps Back: pullups or lat pulldowns â€” 3 sets of 6â€“8 reps Chest: barbell or dumbbell incline press â€” 3 sets of 6â€“8 reps Shoulders: machine shoulder press â€” 3 sets of 6â€“8 reps Biceps: barbell or dumbbell biceps curls â€” 3 sets of 8â€“10 reps Shoulders: reverse machine fly â€” 3 sets of 10â€“12 reps Calves: standing calf raises â€” 3 sets of 10â€“12 reps Day 3: Full body Legs: leg press â€” 3 sets of 5 reps Back: T-bar rows â€” 3 sets of 6â€“8 reps Chest: machine or dumbbell chest fly â€” 3 sets of 6â€“8 reps Shoulders: one-arm dumbbell shoulder press â€” 3 sets of 6â€“8 reps Triceps: dumbbell or machine triceps extensions â€” 3 sets of 8â€“10 reps Shoulders: cable or dumbbell front raises â€” 3 sets of 10â€“12 reps Calves: seated calf raises â€” 3 sets of 10â€“12 reps Abs: decline crunches â€” 3 sets of 10â€“12 reps', 'Workout'),
(14, 'Intermediate workout routine for men', 'After working hard in the gym for several months, itâ€™s time to step your training up a notch to keep your gains coming.  At this point, you should have good exercise technique and be able to handle more weight on the bar.  This 4-day-per-week intermediate program increases reps and sets to stimulate new muscle growth. When they become too easy, you can gradually add more weight or more reps/sets.  If you do it correctly, you can follow this routine for several years until you reach an advanced level. It may be helpful to switch up your exercises on occasion to keep yourself engaged and prevent burnout.  Remember that soreness is not always an indicator of muscle growth. Now that you have some training experience, you may not get sore after every workout.  Equipment required: fully equipped gym  Rest intervals: 90â€“180 seconds for main movements, 60â€“90 seconds for accessories  Intensity: Select a weight that allows you to complete the prescribed reps while leaving about 2 solid reps in the tank. To increase intensity, go to your limit on the last set.  Day 1: Upper body Chest: flat barbell bench press â€” 4 sets of 6â€“8 reps Back: bent-over barbell rows â€” 3 sets of 6â€“8 reps Shoulders: seated dumbbell press â€” 3 sets of 8â€“10 reps Chest/triceps: dips â€” 3 sets of 8â€“10 reps Back: pullups or lat pulldowns â€” 3 sets of 8â€“10 reps Triceps/chest: lying dumbbell triceps extensions â€” 3 sets of 10â€“12 reps Biceps: incline dumbbell curls â€” 3 sets of 10â€“12 reps Day 2: Lower body Legs: barbell back squats â€” 4 sets of 6â€“8 reps Legs: leg press â€” 3 sets of 8â€“10 reps Quadriceps: seated leg extensions â€” 3 sets of 10-12 reps Quadriceps: dumbbell or barbell walking lunges â€” 3 sets of 10â€“12 reps (no videos) Calves: calf press on leg press â€” 4 sets of 12â€“15 reps Abs: decline crunches â€” 4 sets of 12â€“15 reps Day 3: Upper body Shoulders: overhead press â€” 4 sets of 6â€“8 reps Chest: incline dumbbell bench press â€” 3 sets of 8â€“10 reps Back: one-arm cable rows â€” 3 sets of 10â€“12 reps Shoulders: cable lateral raises â€” 3 sets of 10â€“12 reps Rear deltoids/traps: face pulls â€” 3 sets of 10â€“12 reps Traps: dumbbell shrugs â€” 3 sets of 10â€“12 reps Triceps: seated overhead triceps extensions â€” 3 sets of 10â€“12 reps Biceps: machine preacher curls â€” 3 sets of 12â€“15 reps Day 4: Lower body Back/hamstrings: barbell deadlift â€” 4 sets of 6 reps Glutes: barbell hip thrusts â€” 3 sets of 8-10 reps Hamstrings: Romanian dumbbell deadlifts â€” 3 sets of 10â€“12 reps Hamstrings: lying leg curls â€” 3 sets of 10-12 reps Calves: seated calf raises â€” 4 sets of 12â€“15 reps Abs: leg raises on Roman chair â€” 4 sets of 12â€“15 reps', 'Workout'),
(15, 'Advanced workout routine for men', 'Additional volume (sets and reps) and intensity (weight on the bar) are essential for advanced gym-goers to keep gaining muscle. Keep in mind that you should not attempt this routine unless youâ€™ve been training consistently for 2 or more years.  While the muscle gains wonâ€™t come as fast as they did when you were a beginner, thereâ€™s still room for significant progress at this stage.  This grueling workout routine has you in the gym 6 days per week with 1 rest day in between. It follows a pull-push-legs pattern, hitting each muscle group twice per week, with supersets incorporated for maximum hypertrophy (muscle growth).  Again, you can increase weight on the bar, as well as sets and reps, from week to week to ensure continued progress while following this program.  Equipment required: fully equipped gym  Rest periods: 90â€“180 seconds for main movements, 60â€“90 seconds for accessories  Intensity: Select a weight that allows you to complete the prescribed reps while leaving about 2 solid reps in the tank. To increase intensity, go to failure on the last set.  Supersets: Complete the initial set of the first movement immediately followed by the second movement. Repeat until all designated reps and sets are complete.  Pull A Back/hamstrings: barbell deadlift â€” 5 sets of 5 reps Back: pullups or lat pulldowns â€” 3 sets of 10â€“12 reps Back: T-bar rows or seated cable rows â€” 3 sets of 10â€“12 reps Rear deltoids/traps: face pulls â€” 4 sets of 12â€“15 reps Biceps: hammer curls â€” 4 sets of 10-12 reps supersetted with dumbbell shrugs 4 sets of 10â€“12 reps Biceps: standing cable curls â€” 4 sets of 10â€“12 reps Push A Chest: flat barbell bench press â€” 5 set of 5 reps Shoulders: seated dumbbell press â€” 3 sets of 6â€“8 reps Chest: incline dumbbell bench press â€” 3 sets of 10â€“12 reps Triceps/shoulders: triceps pushdowns â€” 4 sets of 10â€“12 reps supersetted with lateral raises â€” 4 sets of 10â€“12 reps Chest: cable crossovers â€” 4 sets of 10â€“12 reps Legs A Legs: barbell back squats â€” 5 sets of 5 reps Hamstrings: Romanian dumbbell deadlifts â€” 3 sets of 6â€“8 reps Legs: leg press â€” 3 sets of 8â€“10 reps Hamstrings: lying leg curls â€” 4 sets of 10â€“12 reps Calves: seated calf raises â€” 4 sets of 12â€“15 reps Abs: decline crunches â€” 4 sets of 12â€“15 reps Pull B Back: bent-over barbell rows â€” 3 sets of 6â€“8 reps Back: pull-ups (weighted if needed) â€” 3 sets of 8â€“10 reps Back: one-arm rows â€” 3 sets of 8â€“10 reps Lower back: hyperextensions â€” 4 sets of 10â€“12 reps supersetted with machine preacher curls â€” 4 sets of 10â€“12 reps Traps: barbell shrugs â€” 4 sets of 10â€“12 reps Biceps: standing dumbbell curls â€” 4 sets of 10â€“12 reps Push B Shoulders: overhead press â€” 5 sets of 5 reps Chest: dumbbell bench press (incline or flat) â€” 3 sets of 8â€“10 reps Chest/triceps: dips (weighted if needed) â€” 4 sets of 10â€“12 reps Shoulders: single-arm cable lateral raises â€” 4 sets of 10â€“12 reps Chest: machine fly â€” 4 sets of 10â€“12 reps Triceps: overhead extensions with rope â€” 4 sets of 10â€“12 reps Legs B Legs: barbell front squats â€” 5 sets of 5 reps Hamstrings: glute ham raises â€” 3 sets of 8â€“10 reps Legs: walking dumbbell lunges â€” 3 sets of 10â€“12 reps per leg Quadriceps: seated leg extensions â€” 4 sets of 10â€“12 reps supersetted with standing calf raises â€” 4 sets of 12â€“15 reps Abs: hanging leg raises â€” 4 sets of 12â€“15 reps', 'Workout');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

DROP TABLE IF EXISTS `product_tbl`;
CREATE TABLE IF NOT EXISTS `product_tbl` (
  `P_ID` int(11) NOT NULL AUTO_INCREMENT,
  `P_name` varchar(50) NOT NULL,
  `Des` varchar(200) NOT NULL,
  `Img` varchar(200) NOT NULL,
  `Price` float NOT NULL,
  PRIMARY KEY (`P_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`P_ID`, `P_name`, `Des`, `Img`, `Price`) VALUES
(14, 'Whey Proteins', 'MuscleBlaze 100% Whey Protein Supplement Powder with Digestive Enzyme, 1.82 kg (4 lb), 54 Servings (Rich Milk Chocolate)', 'prd_1213351-MuscleBlaze-100-Whey-Protein-Supplement-Powder-with-Digestive-Enzyme-4-lb-54-Servings-Rich-Milk-Chocolate_o-removebg-preview.png', 4849),
(15, 'Creatine', 'MuscleBlaze Creatine Monohydrate, 100 g (0.22 lb)', 'prd_1484711-MuscleBlaze-Creatine-Monohydrate-0-removebg-preview.png', 899),
(16, 'Weight Gainer', 'MB Fuel One Weight Gainer, 5 kg (11 lb), Chocolate', 'prd_1901422-MB-Fuel-One-Weight-Gainer-11-lb-Chocolate_o-removebg-preview.png', 2999),
(17, 'Multivitamin - General', 'MuscleBlaze MB-VITE Daily Multivitamin, for Enhanced Energy, Stamina & Gut Health, 60 tablet(s)', 'prd_1863968-MuscleBlaze-MBVITE-Multivitamin-for-Immunity100-RDA-of-Vit-C-D-Zinc-60-tablets-Unflavoured_o-removebg-preview.png', 499),
(18, 'Peanut Butter', 'MuscleBlaze High Protein Peanut Butter, 0.750 kg, Dark Chocolate Creamy', 'prd_1316937-MuscleBlaze-High-Protein-Peanut-Butter-0-removebg-preview.png', 499);

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

DROP TABLE IF EXISTS `user_reg`;
CREATE TABLE IF NOT EXISTS `user_reg` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `c_password` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`user_id`, `username`, `fullname`, `phone`, `email`, `password`, `c_password`, `user_type`) VALUES
(14, 'akash', 'Akash Patel', 6354796797, 'akash834@gmail.com', '123', '123', 'Trainer'),
(15, 'dharmik', 'Dharmik Patel', 9313283596, 'dharmik123@gmail.com', '456', '456', 'Member'),
(16, 'sumit', 'Sumit Chauhan', 9313297856, 'sumit543@gmail.com', '1863', '1863', 'Member'),
(17, 'patel', 'Patel', 9863483288, 'patel864@gmail.com', '123', '123', 'Member'),
(18, 'aryan', 'Aryan Patel', 9313421683, 'aryan123@gmail.com', '12', '12', 'Trainer');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_trainer`
--
ALTER TABLE `add_trainer`
  ADD CONSTRAINT `add_trainer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_reg` (`user_id`);

--
-- Constraints for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD CONSTRAINT `order_tbl_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `product_tbl` (`P_ID`),
  ADD CONSTRAINT `order_tbl_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_reg` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
