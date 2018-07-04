<?php // phpcs:ignore

namespace App;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function __construct()
    {
        // Registered by V8CH Tractor Blocks plugin
        wp_enqueue_script('v8ch_contact_app');
        wp_enqueue_script('v8ch_hero_app');
        wp_enqueue_script('v8ch_projects_app');
        wp_enqueue_script('v8ch_skills_app');
        wp_enqueue_style('v8ch-tractor-blocks');
    }
}
