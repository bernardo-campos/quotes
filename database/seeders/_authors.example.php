<?php

return [
[
	"name" => "Author Name",
	"href" => "scraped/url.html",
	"description" => "Anonymous writer",
	"bd" => [			// array must have 2 or 4 items
		"2/12/1728",	// 1st item shold be a date (d/m/Y) or a year
		"Some, Place",	// 2nd item should be a string (even an empty string "")
		"1787",			// 3rd item like 1st
		"Another"		// 4th item like 2nd
	],
	"img" => "", 		// "example.jpg" [image can be placed at storage/app/public/img/authors/]
	"abstract" => "Brief summary of the author",
	"bio" => "The bio of the author. This string can be very a long text (text datatype in SQL)"
], 
// [...], 
];
