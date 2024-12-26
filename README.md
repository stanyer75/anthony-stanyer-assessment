## Steps To Run The Project

1. **Clone The GitHub Repository:**

   First, clone the repository to your local machine via the github CLI tool: `gh repo clone stanyer75/anthony-stanyer-assessment` 
   or extract as a zip by clicking the '<> code' dropdown then  Download Zip


2. **Copy The `.env` File:**

&nbsp; Ensure you have the `.env` file configured correctly in the project root directory.

3. **Install Packages And Build:**

&nbsp; Run the following commands to install the necessary packages and build the project:

&nbsp; &nbsp; `npm install` `npm run build`

&nbsp; Also, run the following command to install PHP dependencies:

&nbsp; &nbsp; `composer install`

4. **Migrate The Database Tables:**

&nbsp; To create the required database tables, run the following migration command:

&nbsp; &nbsp; `php artisan migrate`

5. **Run The Application:**

&nbsp; Start the application with the following command:

&nbsp; &nbsp; `composer run dev`

6. **View The Application:**

&nbsp; The app is now running at: [127.0.0.1:8000](http://127.0.0.1:8000)
