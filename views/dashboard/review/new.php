<?php

use App\URL\CreateUrl;

$title = "New Review";

?>

<!--
title
poster
date
director
production
writer
actor
genre
synopsis
review
score
    -->

<h3 class="title-page">New Review</h3>

<form class="new" action="<?= CreateUrl::url('ajax/addFilmAjax'); ?>" method="post" enctype="multipart/form-data">
    <div class="input">
        <label for="author">Your Name</label>
        <input type="text" name="author" id="author" value="" aria-describedby="authorInfo" placeholder="Write your name">
        <small id="authorInfo">Your name must not exceed 20 characters</small>
    </div>

    <h4>Film's Information</h4>

    <div class="input">
        <label for="titlePost">Title</label>
        <input type="text" name="reviewTitle" id="reviewTitle" value="" aria-describedby="titleInfo" placeholder="Write your title">
    </div>

    <div class="picture">
        <label for="picture">Upload</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="250000">
        <input type="file" id="picture" name="picture">
        <small>Add the poster of the film</small>
    </div>

    <div class="input">
        <label for="year" class="choose-year">Year</label>
        <select id="year" name="year">
            <script>
                var movieDate = new Date();
                var year = movieDate.getFullYear();
                for(var i = year; i >= 1900; i--){
                    document.write('<option value="'+i+'">'+i+'</option>');
                }
            </script>
        </select>
    </div>
    <!--
        date à choisir, année
    -->

    <div class="input">
        <label for="director">Director</label>
        <input type="text" name="director" id="director" value="" aria-describedby="directorInfo">
    </div>

    <div class="input">
        <label for="writer">Writer</label>
        <input type="text" name="writer" id="writer" value="" aria-describedby="writerInfo">
    </div>

    <div class="input">
        <label for="titlePost">Production</label>
        <input type="text" name="production" id="production" value="" aria-describedby="productionInfo">
    </div>

    <div class="textarea">
        <label for="content">Synopsis</label>
        <textarea type="text"name="content" id="content" rows="20"></textarea>
    </div>


    <h4>Your opinion</h4>

    <div class="textarea">
        <label for="content">Your review</label>
        <textarea type="text"name="content" id="content" rows="20"></textarea>
    </div>


    <div>
        <p id="message"></p>
    </div>

    <div class="button">
        <button id="button" type="submit" name="submit"><span>Submit</span></button>
    </div>
</form>

