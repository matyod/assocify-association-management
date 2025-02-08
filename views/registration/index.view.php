<?php

require view_path('partials/head.php');
require view_path('partials/header.php');

?>

<div class="min-h-screen">
  <div class="flex min-h-full flex-col justify-center px-4 py-16">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-4 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Register a new account</h2>
    </div>

    <!-- TODO: tooltip -->
    <!-- TODO: JS realtime error -->

    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-4" action="/register" method="POST">
        <p <?= isset($errors['exception']) ? 'class="text-red-500 text-sm text-center"' : ''; ?>>
          <?= htmlspecialchars($errors['exception'] ?? ''); ?>
        </p>
        <div class="flex space-x-2">
          <div>
            <label for="first-name" class="block text-sm/6 font-medium text-gray-900">First Name</label>
            <div class="mt-2">
              <input type="text" name="first-name" id="first-name" autocomplete="first-name" required
                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                value="<?= htmlspecialchars($_POST['first-name'] ?? ''); ?>">
            </div>
            <p <?= isset($errors['firstName']) ? 'class="text-red-500 text-sm"' : ''; ?>>
              <?= htmlspecialchars($errors['firstName'] ?? ''); ?>
            </p>
          </div>
          <div>
            <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Last Name</label>
            <div class="mt-2">
              <input type="text" name="last-name" id="last-name" autocomplete="last-name" required
                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                value="<?= htmlspecialchars($_POST['last-name'] ?? ''); ?>">
            </div>
            <p <?= isset($errors['lastName']) ? 'class="text-red-500 text-sm"' : ''; ?>>
              <?= htmlspecialchars($errors['lastName'] ?? ''); ?>
            </p>
          </div>
        </div>

        <div>
          <label for="phone-number" class="block text-sm/6 font-medium text-gray-900">Phone Number</label>
          <div class="mt-2 flex space-x-2">
            <div class="flex-[35%]">
              <select name="country-code" id="country-code" required
                class="block max-h-full w-full rounded-md bg-white px-3 py-1.5 text-sm text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                <option value=""></option>
                <option value="673" <?= isset($_POST['country-code']) && $_POST['country-code'] === '673' ? 'selected' : ''; ?>>Brunei: 673</option>
                <option value="62" <?= isset($_POST['country-code']) && $_POST['country-code'] === '62' ? 'selected' : ''; ?>>Indonesia: 62</option>
                <option value="60" <?= isset($_POST['country-code']) && $_POST['country-code'] === '60' ? 'selected' : ''; ?>>Malaysia: 60</option>
                <option value="65" <?= isset($_POST['country-code']) && $_POST['country-code'] === '65' ? 'selected' : ''; ?>>Singapore: 65</option>
              </select>
              <p <?= isset($errors['countryCode']) ? 'class="text-red-500 text-sm"' : ''; ?>>
                <?= htmlspecialchars($errors['countryCode'] ?? ''); ?>
              </p>
            </div>
            <div class="flex-[65%]">
              <input type="text" name="phone-number" id="phone-number" autocomplete="phone-number" required
                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                value="<?= htmlspecialchars($_POST['phone-number'] ?? ''); ?>">
              <p <?= isset($errors['phoneNumber']) ? 'class="text-red-500 text-sm"' : ''; ?>>
                <?= htmlspecialchars($errors['phoneNumber'] ?? ''); ?>
              </p>
            </div>
          </div>
        </div>

        <div>
          <label for="username" class="block text-sm/6 font-medium text-gray-900">Username</label>
          <div class="mt-2">
            <input type="text" name="username" id="username" autocomplete="username" required
              class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
              value="<?= htmlspecialchars($_POST['username'] ?? ''); ?>">
          </div>
          <p <?= isset($errors['username']) ? 'class="text-red-500 text-sm"' : ''; ?>>
            <?= htmlspecialchars($errors['username'] ?? ''); ?>
          </p>
        </div>

        <div>
          <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
          <div class="mt-2">
            <input type="email" name="email" id="email" autocomplete="email" required
              class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
              value="<?= htmlspecialchars($_POST['email'] ?? ''); ?>">
          </div>
          <p <?= isset($errors['email']) ? 'class="text-red-500 text-sm"' : ''; ?>>
            <?= htmlspecialchars($errors['email'] ?? ''); ?>
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

        <div>
          <button type="submit"
            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
        </div>
      </form>
    </div>
  </div>

</div>

<?php

require view_path('partials/bottom.php');

?>