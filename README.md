
**Nova Password Reset**
---

**Nova Password Reset** is a Laravel Nova v4 package that allows logged-in users to change their passwords directly from the Nova interface. It provides a user-friendly interface and backend validation to ensure security.


**Features**

•  **Password Update**: Users can update their password securely with current password validation.

•  **Real-time Validation**: Provides frontend and backend validation for password changes.

•  **Seamless Nova Integration**: Adds a custom card to the Nova dashboard.

  

**Installation**


**Step 1: Install the Package**

  

Install the package using Composer:

  

composer require your-vendor/nova-password-reset

  

**Step 2: Register the Card**

  

Add the PasswordResetCard to your NovaServiceProvider:

  

```use  YourVendor\NovaPasswordReset\Nova\PasswordResetCard;

  

public  function  cards()

{

return [

new PasswordResetCard(),

];

}

```  

**Step 3: Publish Assets (Optional)**

  

If you want to customize the views, publish the package assets:

  

php artisan vendor:publish --tag=nova-password-reset-views

  

**Step 4: Frontend Compilation**

  

If you modify the frontend files, make sure to recompile the assets. Add the following to your Nova webpack.mix.js:

```  

mix.js('vendor/your-vendor/nova-password-reset/resources/js/card.js', 'public/nova-vendor/nova-password-reset');

```  

Run the compilation process:

  

`npm run dev`

  

**Step 5: Route Setup (Optional)**

  

The package registers its routes automatically, but you can verify they exist in routes/nova-vendor/password-reset/update.

  

**Usage**

  

Once installed, a “Change Password” card will appear on the Nova dashboard for logged-in users.

  

**How to Use:**

1.  Enter the **current password**.

2.  Enter the **new password** and confirm it.

3.  Click **Update Password**.

  

Upon successful validation, the password will be updated, and a success message will be displayed.

  

**Validation Rules**

•  The current password must match the user’s existing password.

•  The new password must be at least **8 characters** long and must match the confirmation field.

  

**Screenshots**

  

**Change Password Card:**

  

<img  src="screenshot.png"  alt="Password Reset Card"  style="width:600px;">

  

  

**Security**

•  The current password is validated on the server-side to prevent unauthorized updates.

•  Passwords are hashed using Laravel’s default hashing mechanism.

  

**Customization**

  

Feel free to modify the Vue component (PasswordResetCard.vue) or the backend controller (PasswordResetController.php) to meet your application’s specific requirements.

  

**Support**

  

If you encounter any issues or have suggestions, feel free to open an issue on the GitHub repository.

  

**License**

  

This package is open-sourced software licensed under the **MIT License**.

  

Happy coding! 🚀