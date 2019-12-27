<?php


require_once 'Faker-master/src/autoload.php';

$faker = Faker\Factory::create();



$startDate = $faker->dateTimeBetween($startDate = '-3 years', $endDate = '2 years', $timezone = null);

$ran = $faker->numberBetween($min = 0, $max = 1000) > 400 ? true : false;
$ran2 = $faker->numberBetween($min = 0, $max = 1000) > 200 ? true : false;
$endDate = clone $startDate;
$endDate->add(date_interval_create_from_date_string('10 days'));
$endDate = $endDate->format('Y-m-d H:i:s');
if ($ran) {
    $endDate = '';
}
$startDate = $startDate->format('Y-m-d H:i:s');
// error_log(
//     json_encode(
//         array("sd" => $startDate, "ed" => $endDate)
//     )
// );




$my_post = array(
    'post_title'    => $faker->sentence($nbWords = 4, $variableNbWords = true),
    'post_type' => 'event',
    'post_status'   => 'publish',
    'post_author'   => 2,
    'post_content' => '<!-- wp:kuevents/events-ui /-->',
    'meta_input' => array(
        'kubase_event_start_date' => $startDate,
        'kubase_event_end_date' => $endDate,
        'kubase_event_description' => $faker->sentences($nb = 10, $asText = true),
        'kubase_event_city' => $faker->city,
        'kubase_event_venue' => $faker->company,
        'kubase_event_link' => $ran2 ? $faker->url : '',
    )

);


//wp_insert_post($my_post);



function wpdocs_delete_all_products()
{
    $myproducts = get_posts(array(
        'posts_per_page' => -1,
        'post_type' => 'event'
    ));

    // error_log(
    //     json_encode(
    //         $myproducts,
    //         JSON_PRETTY_PRINT
    //     )
    // );

    foreach ($myproducts as $myproduct) {
        error_log($myproduct->post_author);
        if (2 == $myproduct->post_author) {
            error_log('erase');
            wp_delete_post($myproduct->ID, true);
        }
        // Delete all products.
        // Set to False if you want to send them to Trash.
    }
}


//wpdocs_delete_all_products();
