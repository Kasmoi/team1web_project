<?
//You are required to work as a team and complete the following task during the online session
// we will check your implementation on 16.02.2022 and the team repo must contain the following task
// Each one of you will first do it in your own repo (or branch) and then the final version in the team repo.
// This task is not graded however will have some impact on the final grade
// It also will help you to practice utlizing GitHub in project work

# 1. Create/read a text file by using approprite php functions
    # Step 1: check if file exists or not
    # Step 2: Open the file using appropriate mode. (each member opens the file in different mode)
    # Step 3: Use fwrite/fread function to write/read on the file your team name and members name.
    # Step 4: Close the file


    #done by kasmir moilanen


    echo "<h1>file exists?</h1>";
    #step1
    if (file_exists("./kasmir_moilanen.txt")){
        echo "file is there";
    }
    else
    echo "file not found";
    echo "<hr><h2>Create the file </h2>";
    #open the file in 'a' mode
    $filekasmir = fopen('kasmir_moilanen.txt','a') or die ("Failed to create/write into the existing file");
    #content for step 3
    $content = "my name: Kasmir Moilanen <br>teammates: Deepan Gautam Danila Karpov<br>";
    fwrite($filekasmir, $content);
    fclose($filekasmir);

#2. Uploaing files
     # Step 1: Create a simple html form to upload a file.
     # Step 2: You are required to limit the upload file size to 2 MB.
     # Step 3: Make sure that users can submit only images.
     # Step 4: Upon successful upload, you print a message "File uploaded successfully" and also
     # provide the link to the directory where files are uploaded.

?>
<form action="./kasmir_upload.php" method="post" enctype="multipart/form-data">
  select an image:
  <input type="file" name="file_img" id="file_img">
  <input type="submit" value="Upload your img" name="submit">
</form>
<a url="https://github.com/Kasmoi/team1web_project/tree/main/grouptask_fileh/kasmir_moilanen">link to repository</a>
