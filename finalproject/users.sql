CREATE TABLE `users1`(
	`id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` varchar(255) NOT NULL,
    `name` varchar(255) NOT NULL,
    `surname` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL
    
);
CREATE TABLE `products1`(
	`id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) NOT NULL,
    `weight` int(255) NOT NULL,
    `price` varchar(255) NOT NULL,
    `desc` varchar(255) NOT NULL,
    `protein_image` varchar(255) NOT NULL
);
CREATE TABLE `shopping1`(
	`id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` int(12) NOT NULL,
    `products_id` int(12) NOT NULL,
    `final_price` int(255) NOT NULL
      
);

INSERT INTO products1(`name`,`weight`,`price`,`desc`,`protein_image`) VALUES
('FUTUREBODY – ISO WHEY','2000g','50$','ISO WHEY IS A PREMIUM WHEY PROTEIN ISOLATE CELEBRATED FOR ITS 
OUTSTANDING NUTRITIONAL PROFILE. THIS TOP-QUALITY PRODUCT IS 
HIGHLY RECOMMENDED FOR INDIVIDUALS LEADING ACTIVE LIFESTYLES, 
ESPECIALLY ATHLETES, AS IT PROMOTES BOTH MUSCLE GROWTH AND MAINTENANCE. 
THE PROTEIN PRESENT IN ISO WHEY PLAYS A CRUCIAL ROLE IN FACILITATING MUSCLE RECOVERY AND REGENERATION.','rstprotein.jpg'),
('ANIMAL PUMP – UNIVERSAL NUTRITION','30SACHETS','40$','Animal Pump ™ – pre-workout creatine Matrix. Nowhere you do not 
get this feeling like this … Pump Muscle !!! It’s the 
sensation that we experience – coming day after day, year 
after year to the gym.','ndprotein.jpg'),
('BioTech USA Iso Whey ZERO','1000g','50$','Iso Whey ZERO is made with the purest cross-flow micro filtered whey protein isolate (WPI) possible, 
    while it truly contains ZERO lactose, ZERO trans fat and ZERO added sugar. Iso Whey ZERO, 
    like all BioTechUSA products, consists of 100% safe, carefully selected nutrients.','rdprotein.jpg'),
('Iron Horse Series – Iso Whey 100%','500g','40$','Whey protein powder is undoubtedly one of the supplements most commonly used by strength athletics and fitness lovers, 
as well as by anyone who wants to supplement protein deficiency in their 
everyday diet and there is nothing unusual in this fact.','fourthprotein.jpg'),
('Optimum Nutrition — Gold','1000g','40$','The world’s best-selling protein powder.
    Supports muscle growth and maintenance.
    24 g of premium whey protein, (5.5 g of BCAAs), but just 1.1 g of fat & 1g of sugar.
    Enjoy first thing in the morning &/or pre or post-workout.','fifthprotein.jpg'),
        ('Optimum Nutrition – SERIOUS','1500g','50$','Serious weight gain requires serious calories. However, those who need the extra calories 
most often have the toughest time consuming enough of them. For many aspiring to 
be bigger, a highly active metabolism, weaker appetite and on-the-run lifestyle 
can make it a real challenge to consume enough calories through whole foods alone.','sixthprotein.jpg'),
('UNIVERSAL STORM','800g','35$','UNIVERSAL STORM is a product based on the mix until 6 forms of creatine and anabolic compounds to support their 
absorption and transport. This ensures that you get the maximum effects of creatine 
supplementation!','seventhprotein.jpg'),
('','','','','eightprotein.jpg'),
('','','','','ninthprotein.jpg'),
('','','','','tenthprotein.jpg');