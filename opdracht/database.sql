DROP DATABASE IF EXISTS herorankings;

CREATE DATABASE herorankings;

USE herorankings;

CREATE TABLE `heros`(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    heronaam VARCHAR(255) NOT NULL,
    mainability VARCHAR(255) NOT NULL,
    subabilities VARCHAR(255),
    elo int(11) NOT NULL,
    naam VARCHAR(255) NOT NULL,
    telnummer BIGINT(11) NOT NULL,
    email VARCHAR(255) NOT NULL,
    age INT(11) NOT NULL,
    noodcontact BIGINT(11) NOT NULL,
    backstory VARCHAR(3000) NOT NULL,
    motivatie VARCHAR(3000) NOT NULL,
    training VARCHAR(255),
    achievements VARCHAR(3000),
    stats INT(11) NOT NULL,
    strength INT(11) NOT NULL,
    health INT(11) NOT NULL,
    fitness INT(11) NOT NULL
);

USE herorankings;

CREATE TABLE monsters (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(255) NOT NULL,
    rank VARCHAR(255) NOT NULL,
    history VARCHAR(3000) NOT NULL,
    ability VARCHAR(255) NOT NULL,
    strength INT(11) NOT NULL,
    health INT(11) NOT NULL,
    fitness INT(11) NOT NULL
);

USE herorankings;

CREATE TABLE accounts (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gebruikersnaam VARCHAR(255) NOT NULL,
    wachtwoord VARCHAR(255) NOT NULL,
    strength INT(11) NOT NULL,
    heros VARCHAR(255),
    levels BIGINT(11) NOT NULL,
    XP BIGINT(11) NOT NULL,
    gold BIGINT(11) NOT NULL
);

USE herorankings;

INSERT INTO
    heros (
        `naam`,
        `heronaam`,
        `age`,
        `email`,
        `telnummer`,
        `noodcontact`,
        `backstory`,
        `motivatie`,
        `training`,
        `stats`,
        `mainability`,
        `subabilities`,
        `elo`,
        `achievements`,
        `strength`,
        `health`,
        `fitness` 
    )
VALUES
    (
        'Saitama',
        'Caped Baldy ハゲマント, The Fist That Has Turned Against God 神に仇なす拳',
        '25',
        'saitama@hotmail.com',
        '13676697078',
        '13925217291',
        '
In a nondescript city, in an unremarkable apartment, lived a man named Saitama. Once an aimless salaryman, he found himself disillusioned with lifes monotony. One fateful day, he encountered a monstrous crab-like creature threatening a child. Acting on impulse, Saitama leaped into action, defeating the beast with a single punch. This victory sparked a newfound purpose within him.
Driven by the thrill of battle and the desire to protect the innocent, Saitama embarked on a rigorous training regimen. Enduring relentless physical trials, he pushed his body to its limits, striving for strength beyond measure. Through unwavering determination and countless sacrifices, he honed his skills to perfection, becoming the unstoppable hero known as One Punch Man.
Despite his unmatched power, Saitama remains humble, longing for a challenge that eludes him in the form of opponents who can withstand more than a single punch. Yet, in the absence of formidable adversaries, he continues his heroics, tirelessly defending his city with unparalleled resolve.',
        'Saitamas motivation for heroism stems from a desire to bring meaning to his life and protect the innocent from harm. His initial act of heroism awakened a sense of duty within him, driving him to use his incredible power for the greater good. Despite his overwhelming strength, he remains grounded, seeking fulfillment through the simple act of helping others.Though he yearns for a worthy opponent to test his abilities, Saitama never wavers in his commitment to justice. He finds purpose in the everyday struggles of being a hero, knowing that even the smallest acts of kindness can make a difference in the lives of those he protects. With unwavering determination and a humble heart, Saitama continues to embody the essence of true heroism.',
        'Na anderhalf jaar van dagelijks 100 push-ups, sit-ups en squats, plus 10 km hardlopen per dag',
        '36',
        'Serious Series',
        'Unparalleled Physical, Prowess Invulnerability, Vacuum Survival, Indomitable Will, Accelerated Development, Afterimage Creation, Shockwave Generation, Non-Physical Interaction, Technique Mimicry, Time Travel (Formerly)',
        '1200',
        'null',
        '20',
        '15',
        '15'
    ),
    (
        'Genos',
        'Genos Demon Cyborg 鬼サイボーグ',
        '19',
        'Genos@hotmail.com',
        '10024132601',
        '15531039388',
        'Genos, once a normal boy living a peaceful life, saw his world torn apart by a devastating attack from a rampaging cyborg. In the aftermath, he was left with nothing but the ashes of his former existence and a burning desire for revenge. Determined to eradicate the threat of cyborgs and protect humanity from further devastation, Genos sought out the enigmatic Saitama, the hero rumored to be capable of defeating any foe with a single punch. Impressed by Saitamas power and resolve, Genos pleaded to become his disciple, eager to learn the secrets of his strength and fulfill his quest for justice. Under Saitamas guidance, Genos honed his combat skills and underwent extensive cybernetic enhancements, transforming into a powerful cyborg hero. Despite his mechanical exterior, Genos retains the humanity and compassion that drives him to protect the innocent. His origin story serves as a reminder of the fragility of life and the importance of standing up against evil, no matter the cost.',
        'Genoss motivation for heroism is fueled by a deep sense of duty and a desire to prevent others from experiencing the same tragedy he endured. The loss of his family and home at the hands of a malevolent cyborg instilled within him a relentless drive for justice.As a hero, Genos seeks to confront and eliminate threats to humanity, particularly those posed by dangerous cyborgs and other villains. He is willing to sacrifice everything in pursuit of this goal, dedicating himself fully to the protection of innocent lives.Though his quest for vengeance initially consumed him, Genos has since evolved into a selfless protector, guided by principles of honor and compassion. His unwavering commitment to justice serves as an inspiration to those around him, embodying the true essence of heroism.',
        'sparren met saitama',
        '63',
        'Cyborg Body',
        'Full Cyborg Weaponry
Flight, Fire Manipulation, Electricity Manipulation, Energy Projection, Self Destruction, Highly Skilled and Strategic Combatant',
        '1200',
        'null',
        '8',
        '9',
        '9'
    ),
    (
        'King',
        'king, The Strongest Man on Earth 地上最強の男,',
        '29',
        'King@hotmail.com',
        '10821740022',
        '13838985908',
        'In the world of heroes and monsters, there exists a figure known simply as King. However, his journey to becoming a revered hero is shrouded in mystery and deception. Originally a timid and unassuming man, Kings life changed forever when he inadvertently found himself in the midst of a battle between two powerful beings. Through a series of coincidences and misunderstandings, he was credited with defeating both adversaries, earning him the reputation as the strongest hero. Despite the accolades and admiration bestowed upon him, King harbors a secret: he is not the fearsome warrior everyone believes him to be. In reality, he is a man paralyzed by fear and uncertainty, incapable of living up to the heroic image crafted by circumstance. Nevertheless, he maintains the facade, relying on his reputation to intimidate foes and maintain peace in the world. Despite his insecurities, King finds solace in his newfound role as a symbol of hope and strength for humanity. Though he may not possess the physical prowess of other heroes, his presence alone serves as a beacon of courage for those in need.',
        'Kings motivation for heroism stems from a desire to protect others and maintain the fragile peace of his world. Despite his lack of genuine power, he recognizes the importance of his role as a symbol of strength and stability. Driven by a sense of duty and responsibility, King reluctantly assumes the mantle of heroism, using his reputation to deter would-be villains and safeguard innocent lives. Though plagued by self-doubt and anxiety, he finds purpose in the belief that his actions, however unintentional, contribute to the greater good. Despite his limitations, King remains committed to upholding justice and defending humanity, even if it means facing his own fears in the process.',
        'null',
        '80',
        'King Engine',
        'Extreme Luck, Master Gamer, Intimidating Aura',
        '1200',
        'null',
        '1',
        '1',
        '1'
    ),
    (
        'Flashy flash',
        'Forelocks in the Face',
        '25',
        'forelocks@hotmail.com',
        '13324350685',
        '12791088403',
        'Flashy Flash, once known by his birth name, "Lightspeed Flash," hails from the mysterious ninja village of the Land of Seafolk. Trained in the ancient arts of shinobi warfare from a young age, he displayed exceptional talent and agility, earning him the moniker "Flashy Flash." Determined to hone his skills to perfection, he embarked on a rigorous journey, traveling the world and seeking out legendary warriors to test his abilities against. During his travels, Flashy Flash encountered a multitude of adversaries, each presenting unique challenges that pushed him to his limits. Through perseverance and unwavering dedication, he mastered the art of combat, achieving speeds beyond comprehension and earning a reputation as one of the most formidable fighters in the world. His quest for mastery eventually led him to the Hero Association, where he joined forces with other heroes to defend humanity against the threat of monsters and villains. Though his origins remain shrouded in secrecy, Flashy Flashs commitment to justice and his unparalleled combat prowess make him a formidable ally in the fight for peace.',
        'Flashy Flashs motivation for heroism stems from a deep-seated desire to protect the innocent and uphold the principles of justice. As a skilled warrior and defender of humanity, he recognizes the responsibility that comes with his abilities and is driven by a sense of duty to use them for the greater good. Despite his aloof demeanor, Flashy Flash harbors a strong sense of compassion for those in need, often risking life and limb to ensure their safety. His unwavering dedication to his ideals and his commitment to mastering his craft make him a formidable ally in the ongoing battle against evil, inspiring others to rise up and join the fight for a better world.',
        'null',
        '61',
        'Instakill (Katana) Kunai',
        'Superhuman Speed and Agility, Master Swordsman, Ninjutsu Master, Afterimage Creation, Skilled Hand-to-Hand Combatant, Air Manipulation',
        '1200',
        'null',
        '10',
        '7',
        '8'
    ),
    (
        'Superalloy',
        'Chōgōkin Kurobikari',
        '27',
        'Darkshine@hotmail.com',
        '19506585301',
        '12893812273',
        'Superalloy Darkshine, born as Tanktop Master, emerged from humble beginnings in a rough neighborhood plagued by crime and poverty. Growing up, he faced adversity at every turn, constantly bullied and belittled for his appearance and lack of physical strength. Determined to rise above his circumstances, Tanktop Master devoted himself to transforming his body through intense training and discipline. Over years of relentless effort, Tanktop Master sculpted his physique into a formidable weapon, earning him the moniker "Superalloy Darkshine" for his impenetrable skin and unparalleled strength. With his newfound abilities, he embarked on a quest to protect the innocent and uphold justice in a world rife with chaos and corruption. Despite facing countless challenges and setbacks, Superalloy Darkshine remains unwavering in his commitment to his ideals. His journey from a bullied youth to a revered hero serves as a testament to the power of perseverance and determination in the face of adversity.',
        'Superalloy Darkshines motivation for heroism stems from a desire to inspire hope and strength in others, especially those who, like himself, have faced hardship and adversity. Having endured the pain of bullying and discrimination, he understands the importance of standing up for the weak and protecting the innocent from harm. Driven by a deep sense of empathy and compassion, Superalloy Darkshine uses his incredible strength and unwavering resolve to confront injustice and defend those who cannot defend themselves. Despite his intimidating appearance, he possesses a gentle heart and an unwavering dedication to serving others, making him a true beacon of hope in a world often overshadowed by darkness.',
        'null',
        '61',
        'Superhuman Physical',
        'Prowess, Master Hand-to-Hand Combatant',
        '1200',
        'null',
        '8',
        '9',
        '10'
    ),
    (
        'Tatsumaki',
        'Tornado of Terror 戦慄のタツマキ',
        '28',
        'tornado@outlook.com',
        '16259797374',
        '15532513629',
        'Tatsumaki, also known as the Tornado of Terror, was born with extraordinary psychic abilities in a world teeming with supernatural threats. From a young age, she displayed unparalleled talent in manipulating telekinetic forces, exhibiting feats of power far beyond the comprehension of ordinary individuals. However, her gifts also brought her isolation and mistrust from those who feared her immense power. Despite the challenges she faced, Tatsumaki refused to be cowed by societys prejudice. Determined to use her abilities for the greater good, she honed her skills through rigorous training and relentless practice. As she matured, Tatsumaki emerged as one of the most formidable heroes in the world, revered for her unmatched prowess in combat and her unwavering dedication to protecting humanity from all manner of threats. Though her past remains shrouded in mystery, Tatsumakis journey from a misunderstood outcast to a revered hero serves as a testament to her indomitable spirit and unyielding resolve in the face of adversity.',
        'Tatsumakis motivation for heroism stems from a deep-seated desire to protect the innocent and assert her dominance over those who would seek to exploit her power. Despite her formidable abilities, she harbors a strong sense of compassion for the weak and vulnerable, using her telekinetic prowess to shield them from harm. Driven by a sense of duty and a desire to prove herself in a world that often underestimates her, Tatsumaki confronts threats head-on with unwavering determination and unbridled fury. Her commitment to justice and her willingness to put herself in harms way for the sake of others make her a formidable ally in the ongoing battle against evil, inspiring awe and admiration in all who witness her incredible feats.',
        'null',
        '65',
        'Psychokinesis',
        'null',
        '1200',
        'null',
        '9',
        '8',
        '10'
    ),
    (
        'Bang',
        'Silver Fang シルバーファング',
        '81',
        'bang@hotmail.com',
        '18446746807',
        '18648243897',
        'Bang, also known as Silver Fang, emerged from humble beginnings in a small village nestled in the mountains. Born into a family of martial artists, he inherited a legacy of strength and discipline from a young age. Under the tutelage of his wise and skilled master, Bang dedicated himself to the study of martial arts, mastering ancient techniques passed down through generations. As he honed his skills, Bangs reputation as a formidable fighter grew, earning him the moniker "Silver Fang" for his deadly precision and unwavering resolve. However, his journey was not without hardship. Along the way, he faced numerous trials and adversaries, each serving to temper his spirit and strengthen his resolve. Through years of relentless training and unwavering determination, Bang emerged as one of the greatest martial artists the world had ever known. With his unparalleled skill and unwavering commitment to justice, he joined the ranks of the Hero Association, using his abilities to protect humanity from the threat of monsters and villains.',
        'bangs motivation for heroism stems from a deep-seated desire to uphold the values of justice and honor instilled in him by his master. Having witnessed firsthand the devastation wrought by evil, he recognizes the importance of using his martial prowess for the greater good. Driven by a sense of duty and a desire to protect the innocent, Bang dedicates himself fully to the cause of heroism, confronting threats head-on with unwavering courage and determination. Despite his advanced age, he remains a formidable force on the battlefield, inspiring awe and admiration in all who witness his incredible feats. Through his actions, Bang serves as a beacon of hope and strength for humanity, embodying the true essence of heroism with every punch and kick he delivers in the name of justice.angs motivation for heroism stems from a deep-seated desire to uphold the values of justice and honor instilled in him by his master. Having witnessed firsthand the devastation wrought by evil, he recognizes the importance of using his martial prowess for the greater good.Driven by a sense of duty and a desire to protect the innocent, Bang dedicates himself fully to the cause of heroism, confronting threats head-on with unwavering courage and determination. Despite his advanced age, he remains a formidable force on the battlefield, inspiring awe and admiration in all who witness his incredible feats. Through his actions, Bang serves as a beacon of hope and strength for humanity, embodying the true essence of heroism with every punch and kick he delivers in the name of justice.',
        'null',
        '66',
        'Superhuman Physical ',
        'Prowess, Master Martial Artist',
        '1200',
        'null',
        '10',
        '9',
        '9'
    ),
    (
        'Sweet mask',
        'Previous hero name: Secret Mask シークレット仮面',
        '24',
        'mask@hotmail.com',
        '13891078213',
        '10313640447',
        'Sweet Mask, once known by his birth name, Amai Mask, began his journey to heroism in the glitzy world of entertainment. Born with strikingly handsome features and an innate charisma, he quickly rose to fame as a beloved idol and actor. However, beneath the facade of glamour and adoration, Amai Mask harbored a deep-seated disdain for the ugliness and corruption he saw festering in society. Driven by a desire to cleanse the world of its imperfections, Amai Mask embarked on a quest to become the perfect hero. Through rigorous training and surgical enhancements, he transformed himself into the epitome of physical perfection, donning a mask to hide his true face and identity. As Sweet Mask, he emerged as a beacon of hope and inspiration, using his fame and influence to fight against injustice and uphold the ideals of beauty and purity. Though his methods are often ruthless and unforgiving, Sweet Mask remains unwavering in his commitment to his vision of a flawless society, where heroes reign supreme and villains are swiftly dealt with.',
        'Sweet Masks motivation for heroism stems from a deep-seated desire to eradicate the ugliness and corruption he perceives in the world. As a former idol and actor, he witnessed firsthand the superficiality and deceit that permeate society, fueling his contempt for humanitys flaws. Driven by a sense of superiority and a belief in his own righteousness, Sweet Mask dedicates himself fully to the cause of heroism, using his fame and influence to impose his vision of perfection upon the world. Though his methods may be harsh and uncompromising, he remains steadfast in his pursuit of justice, willing to do whatever it takes to cleanse society of its impurities and uphold the ideals of beauty and purity.',
        'null',
        '64',
        'Superhuman Physical',
        'Prowess, Regeneration, Transformation',
        '1200',
        'null',
        '8',
        '7',
        '7'
    ),
    (
        'Zombieman',
        'Subject No. 66 サンプル66号',
        '5000',
        'zombie@hotmail.com',
        '15899552395',
        '12864643111',
        'Zombie Boy, once an ordinary teenager named Zane, lived a quiet life in a small town until a tragic accident changed everything. While exploring an abandoned laboratory, Zane stumbled upon a mysterious experimental serum. Ignoring the warnings, he injected himself with the serum, unaware of its devastating consequences. To his horror, the serum transformed him into a zombie-like creature, cursed with immortality and an insatiable hunger for human flesh. Alienated from society and consumed by guilt over his monstrous nature, Zane retreated into seclusion, hiding from the world that now feared and reviled him.Despite his monstrous appearance, Zanes humanity remained intact, and he vowed to use his cursed existence for the greater good. Embracing his new identity as Zombie Boy, he emerged from the shadows to protect humanity from supernatural threats, using his undead abilities to combat evil and defend the innocent. Though haunted by his past and the consequences of his actions, Zombie Boy remains steadfast in his commitment to heroism, determined to redeem himself and prove that even the most unlikely of heroes can make a difference in the world.',
        'Zombie Boys motivation for heroism stems from a desire to atone for his past mistakes and use his cursed existence for the greater good. Haunted by guilt over the accident that transformed him into a monster, he is driven by a sense of responsibility to protect humanity from the supernatural threats that lurk in the shadows. Despite facing prejudice and mistrust from those he seeks to protect, Zombie Boy remains unwavering in his dedication to heroism, using his undead abilities to confront evil and defend the innocent. Though his journey is fraught with challenges and self-doubt, he finds solace in the belief that even a monster can become a hero with the right intentions and determination.',
        'null',
        '63',
        'Regeneration',
        'null',
        '1200',
        'null', 
        '6',
        '10',
        '10'
    ),   
    (
        'Fubuki',
        'Miss Blizzard フブキ様, Blizzard of Hell 地獄のフブキ',
        '23',
        'fubuki@hotmail.com',
        '11236850589',
        '15013219071',
        'Fubuki, also known as Blizzard of Hell, grew up in the shadow of her older sister, Tatsumaki, a powerful psychic known as the Tornado of Terror. Despite sharing the same extraordinary abilities, Fubuki struggled to find her place in the world, overshadowed by her sisters immense strength and reputation. Determined to carve out her own path, Fubuki founded the Blizzard Group, a faction of powerful psychics and fighters, with the goal of establishing herself as a force to be reckoned with in the hero world. Through cunning strategy and manipulation, she climbed the ranks, earning respect and fear from both allies and enemies alike. However, beneath her cold and aloof exterior lies a deeply insecure and vulnerable individual, haunted by feelings of inadequacy and self-doubt. Despite her outward confidence, Fubuki grapples with the pressure to live up to her sisters legacy and prove her worth as a hero in her own right.',
        'Fubukis motivation for heroism stems from a desire to prove her strength and establish herself as a formidable hero independent of her sisters shadow. Despite her privileged upbringing and powerful abilities, she struggles with feelings of insecurity and inferiority, driving her to relentlessly pursue success and recognition. Driven by a fierce determination to overcome her self-doubt and assert her dominance, Fubuki dedicates herself fully to the cause of heroism, using her cunning intellect and psychic abilities to protect the innocent and achieve her goals. Though her methods may be ruthless at times, her underlying desire to prove herself and carve out her own identity as a hero fuels her unwavering commitment to justice.',
        'null',
        '50',
        'Psychokinesis',
        'null',
        '1200',
        'null',
        '6',
        '5',
        '5'
    );

USE herorankings;

INSERT INTO
    monsters(`naam`, `rank`, `ability`, `history`, `strength`,
        `health`,
        `fitness`)
VALUES
    (
        'Deep Sea King',
        'Demon',
        'Superhuman Physical Prowess, Acid Spit, Regeneration, Transformation',
        'Deep Sea Kings origins trace back to the depths of the ocean, where he was born as a monstrous entity, shaped by the dark and unforgiving currents of the sea. From the earliest moments of his existence, he felt a primal urge to dominate and conquer, driven by a hunger for power that consumed his every thought. As he emerged from the depths, Deep Sea King encountered the surface world, a realm ripe for his conquest. With his formidable strength and mastery over water, he unleashed his wrath upon humanity, wreaking havoc and destruction in his wake. His reign of terror knew no bounds as he asserted his dominance over land and sea alike, leaving devastation in his wake. Though his origins remain shrouded in mystery, Deep Sea Kings path of destruction serves as a testament to the darkness that lurks within him, a force driven by an insatiable thirst for power and control.',
        '7',
        '5',
        '6'
    ),
    (
        'Gouketsu',
        'Dragon',
        'Superhuman Physical Prowess, Martial Arts Master, Shockwave Generation',
        'Gouketsu, once a renowned martial artist seeking greater strength, stumbled upon the mysterious martial arts tournament held by the Monster Association. Enticed by the promise of unimaginable power, he eagerly participated, showcasing his formidable skills and overwhelming strength. During the tournament, Gouketsu encountered monstrous opponents who pushed him to his limits. Despite facing insurmountable odds, he emerged victorious, his thirst for power only growing stronger with each battle. However, his victory came at a cost, as he succumbed to the allure of becoming a monster himself. Transformed by dark forces, Gouketsu embraced his newfound monstrous form, abandoning his former identity as a hero to serve the twisted ambitions of the Monster Association. With his unmatched strength and mastery of combat, he rose through the ranks, becoming a fearsome enforcer for the organizations malevolent agenda. Though his past as a revered martial artist may have been overshadowed by his descent into villainy, Gouketsu remains a formidable adversary, his monstrous power fueled by an insatiable thirst for dominance and destruction.'
        ,'10',
        '7',
        '9'
    ),
    (
        'Garou',
        'Dragon, God (Self-Proclaimed)',
        'Superhuman Physical Prowess, Supernatural Senses, Afterimage Creation, Accelerated Development, Indomitable Will, Technique Mimicry, Regeneration, Transformation (Formerly), Flight (Formerly), Energy Projection (Formerly), Time Travel (Formerly)',
        'Garous journey into villainy began as a disillusioned young boy, ostracized and bullied for his unconventional views on heroism. Growing up, he idolized heroes but soon became disillusioned by their flaws and the injustice they perpetuated. Fueled by a desire to challenge the status quo, Garou embarked on a path of self-discovery, determined to redefine the meaning of strength and justice. Through rigorous training and relentless determination, Garou honed his combat skills to perfection, surpassing even the most formidable heroes in his quest for power. However, his rejection of traditional heroism led him down a darker path, as he embraced his identity as a villainous figure known as the Hero Hunter. Driven by a deep-seated resentment towards the hero society that rejected him, Garou seeks to dismantle the established order and prove his superiority through chaos and destruction. With each battle, he grows stronger and more determined to achieve his goal of becoming the ultimate monster, capable of challenging even the mightiest of heroes.'
        , '10',
        '8',
        '9'
    ),
    (
        'Carnage',
        'Dragon',
        'Superhuman Physical Prowess, Genius Intellect, Keen Instincts, Dynamic Vision, Flight, Transformation',
        'Carnage Kabutos origin is steeped in the shadowy world of scientific experimentation and twisted ambition. Once a brilliant scientist working in the field of genetic engineering, Kabuto dedicated his life to pushing the boundaries of scientific knowledge, driven by an insatiable curiosity and thirst for power. Obsessed with unlocking the secrets of strength and immortality, Kabuto conducted a series of unethical experiments, splicing together human and monster DNA in a reckless pursuit of perfection. However, his experiments took a dark turn when he subjected himself to his own serum, transforming into the monstrous creature known as Carnage Kabuto. With his mind consumed by primal instincts and an insatiable hunger for destruction, Carnage Kabuto unleashed his fury upon the world, leaving chaos and devastation in his wake. Driven by a twisted desire for dominance and control, he revels in the thrill of battle, seeking out worthy adversaries to test his monstrous strength against.'
        , '8',
        '7',
        '8'
    ),
    (
        'Boros',
        'Dragon (or higher)',
        'Superhuman Physical Prowess, Flight, Regeneration, Transformation, Energy Projection',
        'Boros, also known as Lord Boros, hails from the distant reaches of the universe, where he once ruled over a powerful empire spanning countless star systems. Born into a society steeped in warfare and conquest, Boros ascended to the throne through sheer strength and cunning, his prowess in battle unmatched by any who dared to challenge him. Despite his overwhelming power, Boros grew bored with the endless cycle of conquest, yearning for a worthy opponent who could push him to his limits. Determined to find a challenge worthy of his strength, he embarked on a quest across the cosmos, leaving destruction in his wake as he searched for a foe who could match his power. Eventually, Boross search brought him to Earth, where he encountered the Hero Association and its roster of powerful heroes. Seeing the potential for a worthy challenge, he launched an invasion of the planet, intent on testing his might against humanitys strongest defenders.'
        , '10', 
        '9',
        '9'
    ),
    (
        'Sound Sonic',
        'demon',
        'Superhuman Speed and Agility, Afterimage Creation, Electricity Manipulation',
        'Speed-o-Sound Sonic, once a promising young martial artist, fell from grace after a devastating defeat at the hands of Saitama, the One Punch Man. From a young age, Sonic dedicated his life to the pursuit of martial arts mastery, driven by a desire to prove himself as the strongest fighter in the world. However, his arrogance and overconfidence led to his downfall when he encountered Saitama, who effortlessly defeated him with a single punch. Humiliated and embittered by his defeat, Sonic abandoned his aspirations of heroism and embraced a life of villainy. Determined to seek vengeance against Saitama and reclaim his lost pride, Sonic adopted the mantle of a villain, using his formidable speed and combat skills to terrorize the innocent and confront his former rival. Though his path may be paved with darkness and betrayal, Sonic remains steadfast in his pursuit of revenge, unwilling to rest until he has bested Saitama and proven himself as the ultimate warrior.'
        , '7',
        '7',
        '7'
    ),
    (
        'Crablante',
        'Tiger',
        'Claw Hands',
        'Crablantes origin is one of tragedy and transformation. Once a humble human, he was transformed into a monstrous crab-like creature after consuming too much crab meat. The mutation warped his body and mind, leaving him with a insatiable hunger for revenge against humanity. Haunted by his grotesque appearance and consumed by rage, Crablante embarked on a rampage of destruction, terrorizing the innocent and wreaking havoc wherever he went. Driven by a primal instinct to lash out at those he perceived as responsible for his transformation, he targeted humans indiscriminately, seeking vengeance for the life he lost. Despite his monstrous appearance, Crablantes humanity remains buried beneath layers of anger and resentment. Though his actions may be driven by vengeance, his tragic origin serves as a reminder of the dangers of unchecked hubris and the consequences of tampering with forces beyond comprehension.'
        , '5',
        '6',
        '3'
    ),
(
    'Hammerhead',
    'Tiger',
    'Enhanced Strength',
    'Hammerheads journey into villainy began as a disillusioned worker, tired of the injustices perpetuated by the system. Born into a society that valued strength and power above all else, he struggled to make ends meet in a world dominated by corrupt corporations and wealthy elites. Fed up with the endless cycle of poverty and oppression, Hammerhead joined a radical movement known as the Paradisers, determined to overthrow the status quo and establish a society where everyone is equal. With his charismatic leadership and unwavering conviction, he rallied his followers to rise up against their oppressors, using violence and intimidation to achieve their goals. However, Hammerheads idealistic vision soon gave way to chaos and destruction as the Paradisers actions grew increasingly violent and indiscriminate. Despite his initial intentions, he became consumed by his desire for revenge and power, leading his followers down a path of darkness and despair. Though his methods may be extreme, Hammerhead remains steadfast in his belief that true equality can only be achieved through revolution, no matter the cost.'
    , '8',
    '6',
    '7'
),
(
    'Vaccine Man',
    'Dragon',
    'Energy Projection, Flight, Transformation',
    'Vaccine Mans origin traces back to a laboratory experiment gone awry. Once a scientist working on a revolutionary vaccine to combat deadly diseases, he became the unwitting subject of his own experiment when an accident exposed him to a potent concoction of chemicals and radiation. The accident transformed him into the monstrous entity known as Vaccine Man, imbuing him with incredible powers and a twisted sense of purpose. Driven by a desire to rid the world of what he perceives as the greatest threat to humanity—humanity itself—he sets out on a rampage of destruction, targeting cities and populations with his devastating abilities. Haunted by memories of his former life and consumed by his newfound power, Vaccine Man embraces his role as a villain, viewing himself as a savior of the planet from the scourge of humanity. Though his actions may be fueled by a misguided sense of righteousness, his origin serves as a cautionary tale of the dangers of tampering with forces beyond comprehension.'
    , '8',
    '6',
    '8'
),
(
    'Elder Centipede',
    'Dragon',
    'Immense Strength, Immense Durability, Underground Mobility, Regeneration, Transformation',
    'Elder Centipedes origin is shrouded in mystery, his true nature and purpose obscured by the depths of time. Born from the primordial darkness of the earth, he emerged as a colossal and ancient creature, the embodiment of primal fury and destruction. Forged in the fiery depths of the planets core, Elder Centipede roamed the earth for centuries, his immense size and power striking fear into the hearts of all who crossed his path. With his impenetrable exoskeleton and razor-sharp mandibles, he became a force of nature, leaving devastation in his wake wherever he went. Though his origins remain unknown, Elder Centipedes reign of terror serves as a reminder of the earths ancient and unfathomable power, a force beyond the comprehension of mortal beings. With each passing century, he grows stronger and more formidable, his insatiable hunger for destruction driving him ever onward in his quest to reclaim the planet as his own.'
    , '9',
    '9',
    '9'
);