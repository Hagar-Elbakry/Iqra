<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
                'title' => 'Head First Object-Oriented Analysis and Design',
                'description' => 'A brain-friendly guide to OOA&D concepts.',
                'image' => 'assets/images/books/Head-First-Object-Oriented-Analysis-and-Design.jpg',
                'author' => 'Brett McLaughlin',
                'quantity' => 10,
                'category_id' => 8,
        ]);
        Book::create([
                'title' => 'Head First Design Patterns',
                'description' => 'Learn design patterns in an engaging way.',
                'image' => 'assets/images/books/Head-First-Design-Patterns.jpg',
                'author' => 'Eric Freeman',
                'quantity' => 8,
                'category_id' => 8,
        ]);
        Book::create([
                'title' => 'Grokking Algorithms',
                'description' => 'A friendly guide to algorithms and data structures.',
                'image' => 'assets/images/books/Grokking-Algorithms.jpg',
                'author' => 'Aditya Bhargava',
                'quantity' => 12,
                'category_id' => 8,
        ]);
        Book::create([
                'title' => 'Clean Architecture',
                'description' => 'A Craftsman\'s Guide to Software Structure and Design.',
                'image' => 'assets/images/books/Clean-Architecture.jpg',
                'author' => 'Robert C. Martin',
                'quantity' => 6,
                'category_id' => 8,
        ]);
        Book::create([
                'title' => 'Clean Code',
                'description' => 'A Handbook of Agile Software Craftsmanship.',
                'image' => 'assets/images/books/Clean-Code.jpg',
                'author' => 'Robert C. Martin',
                'quantity' => 7,
                'category_id' => 8
        ]);
        Book::create([
            'title' => 'You Don\'t Know JS',
            'description' => 'Deep dive into JavaScript core mechanisms.',
            'image' => 'assets/images/books/You-Dont-Know-JS.jpg',
            'author' => 'Kyle Simpson',
            'quantity' => 9,
            'category_id' => 2,
        ]);

        Book::create([
            'title' => 'Laravel: Up & Running',
            'description' => 'A practical guide to Laravel framework.',
            'image' => 'assets/images/books/Laravel-Up-Running.jpg',
            'author' => 'Matt Stauffer',
            'quantity' => 11,
            'category_id' => 2,
        ]);

        Book::create([
            'title' => 'Head First HTML and CSS',
            'description' => 'A learner-friendly HTML and CSS introduction.',
            'image' => 'assets/images/books/Head-First-HTML-and-CSS.jpg',
            'author' => 'Elisabeth Robson',
            'quantity' => 13,
            'category_id' => 2,
        ]);

        Book::create([
            'title' => 'Fluent Python',
            'description' => 'Clear, concise guide to Python best practices.',
            'image' => 'assets/images/books/Fluent-Python.jpg',
            'author' => 'Luciano Ramalho',
            'quantity' => 5,
            'category_id' => 2,
        ]);

        Book::create([
            'title' => 'CSS Refactoring',
            'description' => 'Techniques for clean and maintainable CSS.',
            'image' => 'assets/images/books/CSS-Refactoring.jpg',
            'author' => 'Steve Lindstrom',
            'quantity' => 4,
            'category_id' => 2,
        ]);
        Book::create([
            'title' => 'Albert Einstein: A Biography',
            'description' => 'An in-depth look at the life and work of Albert Einstein.',
            'image' => 'assets/images/books/AlbertEinsteinABiography.avif',
            'author' => 'Albrecht Fölsing',
            'quantity' => 7,
            'category_id' => 1,
        ]);

        Book::create([
            'title' => 'The Einstein File',
            'description' => 'FBIs secret file on the life of Albert Einstein.',
            'image' => 'assets/images/books/TheEinsteinFile.avif',
            'author' => 'Fred Jerome',
            'quantity' => 5,
            'category_id' => 1,
        ]);

        Book::create([
            'title' => 'Einstein 1905: The Standard of Greatness',
            'description' => 'The remarkable year in which Einstein revolutionized physics.',
            'image' => 'assets/images/books/Einstein1905TheStandardofGreatness.avif',
            'author' => 'John S. Rigden',
            'quantity' => 6,
            'category_id' => 1,
        ]);

        Book::create([
            'title' => 'Einstein on Politics',
            'description' => 'Einsteins political thoughts and writings.',
            'image' => 'assets/images/books/EinsteinonPolitics.avif',
            'author' => 'David E. Rowe & Robert Schulmann',
            'quantity' => 4,
            'category_id' => 1,
        ]);

        Book::create([
            'title' => 'The Born-Einstein Letters',
            'description' => 'A correspondence between Albert Einstein and Max Born.',
            'image' => 'assets/images/books/TheBorn-EinsteinLetters.avif',
            'author' => 'Albert Einstein & Max Born',
            'quantity' => 3,
            'category_id' => 1,
        ]);
        Book::create([
            'title' => 'Eat To Live',
            'description' => 'A guide to nutrition for improved health and longevity.',
            'image' => 'assets/images/books/EatToLive.jpg',
            'author' => 'Joel Fuhrman',
            'quantity' => 8,
            'category_id' => 3,
        ]);

        Book::create([
            'title' => 'The Miracle Morning',
            'description' => 'Transform your life with the morning routine that changed millions.',
            'image' => 'assets/images/books/TheMiracleMorning.jpg',
            'author' => 'Hal Elrod',
            'quantity' => 7,
            'category_id' => 3,
        ]);

        Book::create([
            'title' => 'Healthy Weight Loss',
            'description' => 'Practical strategies for sustainable and healthy weight loss.',
            'image' => 'assets/images/books/HealthyWeightLoss.jpg',
            'author' => 'Jane Smith',
            'quantity' => 6,
            'category_id' => 3,
        ]);

        Book::create([
            'title' => 'Handbook of Medicinal Herbs',
            'description' => 'Comprehensive reference on the medicinal uses of herbs.',
            'image' => 'assets/images/books/HandbookofMedicinalHerbs.jpg',
            'author' => 'James A. Duke',
            'quantity' => 5,
            'category_id' => 3,
        ]);

        Book::create([
            'title' => 'Aromatherapy: Natural Scents',
            'description' => 'The art and science of using natural scents for wellness.',
            'image' => 'assets/images/books/AromatherapyNaturalScents.png',
            'author' => 'Valerie Ann Worwood',
            'quantity' => 4,
            'category_id' => 3,
        ]);
        Book::create([
            'title' => 'The Reluctant Coroner',
            'description' => 'A gripping mystery featuring an unexpected coroner.',
            'image' => 'assets/images/books/TheReluctantCoroner.jpg',
            'author' => 'Paul Austin Ardoin',
            'quantity' => 8,
            'category_id' => 4,
        ]);

        Book::create([
            'title' => 'The Fireraisers',
            'description' => 'An intense crime novel full of suspense and twists.',
            'image' => 'assets/images/books/TheFireraisers.jpeg',
            'author' => 'Malcolm Archibald',
            'quantity' => 7,
            'category_id' => 4,
        ]);

        Book::create([
            'title' => 'Tell Me Why',
            'description' => 'A thrilling murder mystery that keeps you guessing.',
            'image' => 'assets/images/books/TellMeWhy.jpeg',
            'author' => 'Camilla Grebe',
            'quantity' => 6,
            'category_id' => 4,
        ]);

        Book::create([
            'title' => 'Murder on Tyneside',
            'description' => 'A cozy British murder mystery with a sharp detective.',
            'image' => 'assets/images/books/MurderonTyneside.jpeg',
            'author' => 'Eileen Thornton',
            'quantity' => 5,
            'category_id' => 4,
        ]);
        Book::create([
            'title' => 'Life of the wild',
            'description' => 'A thrilling adventure novel set in a remote wilderness.',
            'image' => 'assets/images/books/main-banner1.jpg',
            'author' => 'Eileen Thornton',
            'quantity' => 5,
            'category_id' => 4,
        ]);
        Book::create([
            'title' => 'Birds Gonna be happy',
            'description' => 'A no-nonsense guide to bird care.',
            'image' => 'assets/images/books/main-banner2.jpg',
            'author' => 'Eileen Thornton',
            'quantity' => 5,
            'category_id' => 4,
        ]);
        

        Book::create([
            'title' => 'After Dark',
            'description' => 'A dark and atmospheric mystery novel.',
            'image' => 'assets/images/books/AfterDark.jpg',
            'author' => 'Haruki Murakami',
            'quantity' => 4,
            'category_id' => 4,
        ]);
        Book::create([
            'title' => 'Win Your Ex Back',
            'description' => 'A step-by-step guide to rekindling lost relationships.',
            'image' => 'assets/images/books/WinYourExBack.png',
            'author' => 'John Alexander',
            'quantity' => 5,
            'category_id' => 5,
        ]);
        Book::create([
            'title' => 'Master Tennis',
            'description' => 'Techniques and strategies to master the game of tennis.',
            'image' => 'assets/images/books/MasterTennis.png',
            'author' => 'Roger Skillman',
            'quantity' => 8,
            'category_id' => 6,
        ]);

        Book::create([
            'title' => 'Sprints And Marathons',
            'description' => 'Training tips and guides for both sprinters and marathon runners.',
            'image' => 'assets/images/books/SprintsAndMarathons.png',
            'author' => 'David Runner',
            'quantity' => 7,
            'category_id' => 6,
        ]);

        Book::create([
            'title' => 'Sports And You',
            'description' => 'The impact of sports on personal development and health.',
            'image' => 'assets/images/books/sportsAndYou.png',
            'author' => 'Michael Coach',
            'quantity' => 6,
            'category_id' => 6,
        ]);

        Book::create([
            'title' => 'Untold Tennis Strategies',
            'description' => 'Hidden strategies that can transform your tennis game.',
            'image' => 'assets/images/books/UntoldTennisStrategies.png',
            'author' => 'Sarah Court',
            'quantity' => 5,
            'category_id' => 6,
        ]);
        Book::create([
            'title' => 'Essentials of Inorganic Chemistry',
            'description' => 'Comprehensive guide to the fundamentals of inorganic chemistry.',
            'image' => 'assets/images/books/EssentialsofInorganicChemistry.jpg',
            'author' => 'Catherine Housecroft',
            'quantity' => 8,
            'category_id' => 7,
        ]);

        Book::create([
            'title' => 'Chemistry Experiments for Children',
            'description' => 'Fun and educational chemistry experiments for young learners.',
            'image' => 'assets/images/books/Chemistryexperimentsforchildren.jpg',
            'author' => 'Virginia L. Mullin',
            'quantity' => 6,
            'category_id' => 7,
        ]);

        Book::create([
            'title' => 'Encyclopedia of Chemistry',
            'description' => 'A reference guide to chemical concepts, elements, and compounds.',
            'image' => 'assets/images/books/EncyclopediaofChemistry.jpg',
            'author' => 'Don Rittner',
            'quantity' => 7,
            'category_id' => 7,
        ]);

        Book::create([
            'title' => 'Analytical Chemistry',
            'description' => 'Detailed coverage of methods and applications in analytical chemistry.',
            'image' => 'assets/images/books/AnalyticalChemistry.jpg',
            'author' => 'Gary D. Christian',
            'quantity' => 5,
            'category_id' => 7,
        ]);

    }
}
