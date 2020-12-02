# PixHarbor

An online platform which provides the utility of buying High Quality Images of different categories(currently nature, travel)


## Files 

| Files | Description |
| :------:| :-----------: |
|retrieve_all_images_fitness.php | Display all 'Fitness' images to User|
|retrieve_all_images_nature.php | Display all 'Nature' images to User|
|retrieve_all_images_travel.php | Display all 'Travel' images to User|
|retrieve_all_images_work.php | Display all 'Work' images to User|
|save_image.php|Preview Image and price details|
|add_to_cart.php|Add Image to Cart|
|order_complete_file.php| Send mail to user on order confirmation|
|display_cart.php| Show all Images added to cart|

## Image Workflow
retrieve_all_images_fitness.php -> save_image.php -> add_to_cart.php -> retrieve_all_images_fitness.php(redirect)