# o2-smartcrop
A smart cropping library for WordPress.

You can select a focus point on an image, then regenerate thumbnails. Any crops will be focused based on the point selected.  

Still in early beta testing.  Looking at a lot of code clean up since it had to be implemented very quickly for a client.

Based off of the works of wp-smartcrop.

If you'd like to help develop or test this, please contact me at chase@crumbls.com 

TODO:
- Finish rewrite of main class.
- Include example code for setting focus for background images based on the percentage.  Use example below.
- Rework for post_content.
- Add any other image formats.
- Disable need to use a tool like "Regenerate Thumbnails" to regenerate the thumbnails once complete.
- Test, test, test.
- If it's working well, figure out if it goes to the repo.


Dev note example:

    if (get_post_meta($attachmentId, '_wpsmartcrop_enabled', true)) {
        if ($tmp = get_post_meta($attachmentId, '_wpsmartcrop_image_focus', true)) {
            printf('background-position: %s%% %s%%;', $tmp['left'], $tmp['top']);
        }
    }
