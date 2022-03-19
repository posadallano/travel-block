<?php 
/*  
 * Layout of Travel block.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'travel-it-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'travel-it-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$daytime             = get_field('daytime');
$image               = get_field('image');
$days_activity_title = get_field('days_activity_title');
$available_service   = get_field('available_service');
$am_decription       = get_field('am_description');
$pm_decription       = get_field('pm_description');
$overnight           = get_field('overnight');

?>

 <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <span class="day"><?php echo esc_attr($daytime); ?></span>
    <?php print_r( $image ); ?>

    <div class="content-info">
        <p><?php echo esc_attr($days_activity_title); ?></p>
        <p><strong>AM/ </strong><?php echo esc_attr($am_decription); ?></p>
        <p><strong>PM/ </strong><?php echo esc_attr($pm_decription); ?></p>
        <p><strong>Overnight/ </strong><?php echo esc_attr($overnight); ?></p>
    </div>
    <div class="services-info">
        <?php print_r($available_service); ?>
    </div>
 </div>


?>