<?php

require view_path('partials/head.php');
require view_path('partials/header.php');

?>

<div class="p-4 pt-20 min-h-screen">
  <div class="flex min-h-full flex-col justify-center px-4 py-16">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Login to your account</h2>
    </div>

    <!-- TODO: tooltip -->
    <!-- TODO: JS realtime error -->

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-4" action="/login" method="POST">
        <p <?= isset($errors['exception']) ? 'class="text-red-500 text-sm text-center"' : ''; ?>>
          <?= htmlspecialchars($errors['exception'] ?? ''); ?>
        </p>
        <div>
          <label for="username" class="block text-sm/6 font-medium text-gray-900">Username</label>
          <div class="mt-2">
            <input type="text" name="username" id="username" autocomplete="username" required autofocus
              class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
              value="<?= htmlspecialchars($_POST['username'] ?? ''); ?>">
          </div>
          <p <?= isset($errors['username']) ? 'class="text-red-500 text-sm"' : ''; ?>>
            <?= htmlspecialchars($errors['username'] ?? ''); ?>
          </p>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
            <div class="text-sm">
              <button class="font-semibold text-indigo-600 hover:text-indigo-500">Show/hide password</button>
            </div>
          </div>
          <div class="mt-2">
            <input type="password" name="password" id="password" autocomplete="password" required
              class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
              value="<?= htmlspecialchars($_POST['password'] ?? ''); ?>">
          </div>
          <p <?= isset($errors['password']) ? 'class="text-red-500 text-sm"' : ''; ?>>
            <?= htmlspecialchars($errors['password'] ?? ''); ?>
          </p>
        </div>

        <!-- TODO: Remember me to save in cookie -->
        <!-- TODO: reset password -->
        <div>
          <button type="submit"
            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
        </div>
      </form>
    </div>
  </div>

</div>

<?php

require view_path('partials/bottom.php');

?>