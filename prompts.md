# 1- Sending blobs through html

## PROMPT
I created a blob type field in mysql. How do i create a html form where i can upload a picture and send it as a blob to php server?

## Code i used


    <!DOCTYPE html>
    <html>
    <head>
        <title>Upload Picture</title>
    </head>
    <body>

        <h2>Upload a picture</h2>

        <form action="upload.php" method="POST" enctype="multipart/form-data">

            <input type="file" name="picture" accept="image/*" required>

            <br><br>

            <button type="submit">Upload Picture</button>

        </form>

    </body>
    </html>


# 2- getting Blobs Back

## PROMPT
and now when i get the blob from the db how do i display the img?

