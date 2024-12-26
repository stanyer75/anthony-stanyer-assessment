## Steps To Run The Project

1. **Clone The GitHub Repository:**

   First, clone the repository to your local machine: `gh repo clone stanyer75/anthony-stanyer-assessment`


2. **Copy The `.env` File:**

Ensure you have the `.env` file configured correctly in your project root directory.

3. **Install Packages And Build:**

Run the following commands to install the necessary packages and build the project:

`npm install` `npm run build`

Also, run the following command to install PHP dependencies:

`composer install`

4. **Migrate The Database Tables:**

To create the required database tables, run the following migration command:

`php artisan migrate`

5. **Run The Application:**

Start the application with the following command:

`composer run dev`

6. **View The Application:**

The app is now running at: [127.0.0.1:8000](http://127.0.0.1:8000)
