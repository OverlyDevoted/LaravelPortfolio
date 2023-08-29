<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        Listing::factory(5)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        /* Listing::create([
            'title' => 'MULTIPLAYER TRAINING SESSIONS IN VIRTUAL REALITY',
            'tags' => 'GAME, VR, MULTIPLAYER',
            'description' => 'During my time at Digital After-Life, one of my
            main projects involved developing a multiplayer VR application exclusively for Oculus Quest 2. This project
            was made using Unreal Engine 5, and I was responsible for implementing all functionalities for it. The
            application allowed users to connect to a dedicated server, where they could explore the virtual space and
            engage with other users through visual and auditory interactions.
            Numerous features were introduced to facilitate user interaction both with one another and their
            surroundings. The primary challenge was to ensure seamless functionality for all connected users, with
            synchronization across the board. Some of the notable features incorporated in the application include:
            1. Drawing board for collaborative drawing sessions;
            2. Integrated Vivox subsystem for in-game Voice over Internet Protocol (VoIP) communication.
            3. Dashboard for user management and game settings configuration.
            4. Slide show presentation viewer to share visual content.
            5. Inverse kinematics for Virtual Reality avatars, enhancing realism and immersion.
            6. Server roles for distinct user responsibilities.
            Throughout the development process, I strived to create a cohesive and enjoyable multiplayer experience
            for Oculus Quest 2 users, aiming to bring them together in a seamless virtual environment.',
            'link' => 'https://www.youtube.com/watch?v=M5oL2s94s5M',
            'username' => 'OverlyDevoted',
        ]);
        Listing::create([
            'title' => 'The GameDev.tv Game Jam 2022 submission absorber',
            'tags' => 'GAME, GAMEJAM, 2D',
            'description' => 'This was a hobby project I developed for The
            GameDev.tv Game Jam 2022. During this game jam, participants were given approximately a week to create
            a video game that would later be rated by others. The theme for this particular game jam was "death is only
            the beginning."
            In response to the theme, I created a top-down 2D shooter game using Unity. The core concept of the
            game involved sacrificing oneself to various types of enemies in order to "possess" their abilities. By doing
            so, the player\'s character could be upgraded and survive for longer periods. The primary objective of the
            project was to establish a flexible system for easily adding and implementing new enemies and
            possessable powers.
            To achieve this, I leveraged Object-Oriented Programming (OOP) principles like inheritance to abstract the
            functionality of possessable powers. As a result, the code was decoupled, making it more reusable and less
            complex.
            The game jam served as a great opportunity for me to practice my creativity and technical skills, and I
            thoroughly enjoyed crafting this unique gaming experience within the given timeframe',
            'link' => 'https://k3yman.itch.io/absorbe',
            'username' => 'OverlyDevoted',
        ]); */
    }
}
