<?php

get_header();

function formatTime($unixEpochWithMilliseconds) {
    return date("M, Y", $unixEpochWithMilliseconds / 1000);
}

global $curauth;
$user = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<h1><?php echo $user->display_name; ?></h1>

<table id="profile">
    <tbody><tr>
        <th colspan="2">
            Basic Information
        </th>
    </tr>
    <tr>
        <td width="35%">
            <table id="profile_picture">
                <tbody><tr>
                    <td class="center">
                        <?php echo get_avatar( $user->ID, '128', 'http://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=128', $user->display_name); ?>
                        <br>
                        <b><?php echo $user->display_name; ?></b>
                    </td>
                </tr>
            </tbody></table>
        </td>
        <td width="65%">
            <table id="profile_information">
                <tbody><tr>
                    <td class="right" width="40%">
                        Status:
                    </td>
                    <td class="center" width="60%">
                    <?php
                        $currentlyInMads = get_field('in_mads', 'user_' . $user->ID);
                        echo $currentlyInMads ? 'Currently in Mads' : 'Ex-Mad';
                    ?>
                    </td>
                </tr>
                <tr>
                    <td class="right">
                        Joined:
                    </td> 
                    <td class="center">
                        <?php echo formatTime(get_field('date_joined', 'user_' . $user->ID)); ?>
                    </td>
                </tr>
                <?php
                    if (!$currentlyInMads) {
                ?>
                <tr>
                    <td class="right">
                        Left:
                    </td> 
                    <td class="center">
                        <?php echo formatTime(get_field('date_left', 'user_' . $user->ID)); ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
                <?php
                    $committeePosition = the_field('committee_position', 'user_' . $user->ID);
                    if ($committeePosition) {
                ?>
                <tr>
                    <td class="right">
                        Committee:
                    </td> 
                    <td class="center">
                        <?php echo $committeePosition; ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
                <tr>
                    <td class="right">
                        Voice:
                    </td>
                    <td class="center">
                        <?php echo the_field('voice_type', 'user_' . $user->ID);?>        
                    </td>
                </tr>
            </tbody>
        </table>
        </td>
    </tr>
    <tr>
        <th colspan="2">
            Profile
        </th>
    </tr>
    <tr>
        <td colspan="2">
            <?php echo apply_filters('the_content', $user->description); ?>     
        </td>
    </tr>
</tbody>
</table>

<?php

get_sidebar();

get_footer();

?>