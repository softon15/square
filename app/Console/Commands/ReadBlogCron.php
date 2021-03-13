<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use App\Models\User;

class ReadBlogCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'readblogs:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $admin = User::find(1);
        $new_posts = 0;

        // Check if admin exists
        if ( $admin->email == "admin@square.com" )
        {
            // Call to endpoint
            $endpoint = "https://sq1-api-test.herokuapp.com/posts";
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', $endpoint);

            $content = json_decode($response->getBody(), true);
            // Check if we have recieved data
            if ( isset($content["data"]) )
            {
                $posts = $content["data"];

                // Loop the posts and try to insert
                foreach ( $posts AS $post )
                {
                    $title = null;
                    if ( isset($post["title"]) )
                    {
                        $title = $post["title"];
                    }

                    $text = null;
                    if ( isset($post["description"]) )
                    {
                        $text = $post["description"];
                    }

                    $date = null;
                    if ( isset($post["publication_date"]) )
                    {
                        $date = $post["publication_date"];
                    }

                    // If we have enough data, try inserting the new blog
                    if ( $title != null && $text != null && $date != null )
                    {
                        $p = new Post;
                        $p->title = $title;
                        $p->text = $text;
                        $p->user_id = 1;
                        $p->created_at = $date;

                        try{
                            $p->save();

                            $new_posts++;
                        }
                        catch ( \Exception $e )
                        {
                            // TODO: store error in BBDD
                        }
                        
                    }
                }
            }
        }

        // Store in logs how many new posts we added
        \Log::info(date('d-m-Y H:i:s') . " - New posts added: " . $new_posts);

        return 0;
    }
}
