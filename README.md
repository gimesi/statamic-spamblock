# Statamic Spam Block
"spam block" is a tiny [Statamic](http://www.statamic.com) plugin that encodes your E-mail address using the [php ord() function](http://php.net/manual/en/function.ord.php) that returns ASCII values for the characters. Of course this is no perfect solution but, hey, better than nothing.

## Installation
- Download the zip file and unzip it (or clone the repo) into	`/_add-ons/`.
- Ensure that the folder name is `spam block` and that `spamblock.php` is in it.

## How to use it
- Insert following code in your template file where you want the number to be displayed: `{{ spamblock mailto="you@yourdomain.com" }}`
- Be happy.

## Optional
- **CSS class**: In case you want to assign a specific CSS class, just do it by adding `class="yourclass"` inside the tag.

## Notes
- The script is primarily intended for my personal use and is provided **"as is"**. I have no plans of making updates on a regular basis. There's no warranty expressed or implied. Use it at your own risk. 
- If you have suggestions, corrections, or just want to say hello, please feel free to drop me a line on Twitter ([@gimesi](http://twitter.com/gimesi)).