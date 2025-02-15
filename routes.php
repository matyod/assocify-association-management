<?php

$router->get('/', 'index.php');
$router->get('/home', 'home/index.php')->only('auth');

$router->get('/notifications', 'notifications/index.php')->only('auth');

$router->get('/events', 'events/index.php')->only('auth');
$router->get('/event', 'events/show.php')->only('auth');
$router->get('/events/create', 'events/create.php')->only('auth');
$router->get('/events/update', 'events/update.php')->only('auth');
// TODO: create post
// TODO: update post

$router->get('/locations', 'locations/index.php')->only('auth');
$router->get('/location', 'locations/show.php')->only('auth');
$router->get('/locations/create', 'locations/create.php')->only('auth');
$router->get('/locations/update', 'locations/update.php')->only('auth');
// TODO: create post
// TODO: update post

$router->get('/committees', 'committees/index.php')->only('auth');
$router->get('/committee', 'committees/show.php')->only('auth');
// dump($_SERVER);
// dumpDie($_SESSION);
$router->get('/committees/create', 'committees/create.php')->only('auth');
$router->get('/committees/update', 'committees/update.php')->only('auth');
$router->get('/committees/member-registration', 'committees/members-reg.php')->only('auth');
// TODO: create post
// TODO: update post
// TODO: member register post

$router->get('/members', 'members/index.php')->only('auth');
$router->get('/member', 'members/show.php')->only('auth');
$router->get('/members/create', 'members/create.php')->only('auth');
// TODO: create post

$router->get('/accounts/update', 'accounts/update.php')->only('auth');
// TODO: update post

$router->get('/qr/scan', 'qr/scan.php')->only('auth');
$router->get('/qr/show', 'qr/show.php')->only('auth');

$router->get('/login', 'authentication/index.php')->only('guest');
$router->post('/login', 'authentication/login.php')->only('guest');
$router->delete('/logout', 'authentication/logout.php')->only('auth');
// NOTE: maybe POST logout

$router->get('/register', 'registration/index.php')->only('guest');
$router->post('/register', 'registration/register.php')->only('guest');
// TODO: login post

// TODO testing only, delete later
$router->get('/log', 'logtest.php');
$router->get('/log2', 'logtest2.php');

# TODO

// To follow RESTful API best practices and avoid including CRUD operations in your URLs, 
// you should structure your routes based on resources rather than actions. 
// HTTP methods (GET, POST, PUT/PATCH, DELETE) should indicate what operation is being performed.
// Here’s how you can rename your routes while following RESTful conventions:

// Updated Routes
// $router->get('/', 'home/index.php');

// $router->get('/notifications', 'notifications/index.php');

// $router->get('/events', 'events/index.php');         // List all events
// $router->get('/events/new', 'events/create.php');    // Show event creation form
// $router->post('/events', 'events/store.php');        // Handle event creation
// $router->get('/events/{id}', 'events/show.php');     // Show a specific event
// $router->get('/events/{id}/edit', 'events/edit.php');// Show event edit form
// $router->put('/events/{id}', 'events/update.php');   // Update an event
// $router->delete('/events/{id}', 'events/delete.php');// Delete an event

// $router->get('/committees', 'committees/index.php');      // List all committees
// $router->get('/committees/new', 'committees/create.php'); // Show committee creation form
// $router->post('/committees', 'committees/store.php');     // Handle committee creation
// $router->get('/committees/{id}', 'committees/show.php');  // Show a specific committee
// $router->get('/committees/{id}/edit', 'committees/edit.php'); // Show committee edit form
// $router->put('/committees/{id}', 'committees/update.php'); // Update a committee
// $router->delete('/committees/{id}', 'committees/delete.php'); // Delete a committee
// $router->post('/committees/{id}/members', 'committees/members-reg.php'); // Register a member to a committee

// $router->get('/members', 'members/index.php');       // List all members
// $router->get('/members/new', 'members/create.php');  // Show member creation form
// $router->post('/members', 'members/store.php');      // Handle member creation
// $router->get('/members/{id}', 'members/show.php');   // Show a specific member

// $router->get('/accounts/{id}/edit', 'accounts/edit.php'); // Show account edit form
// $router->put('/accounts/{id}', 'accounts/update.php'); // Update an account

// $router->get('/qr/scan', 'qr/scan.php');  // Scan QR
// $router->get('/qr/show', 'qr/show.php');  // Show QR details

// $router->get('/login', 'auth/login.php');
// $router->post('/logout', 'auth/logout.php'); // Logout should use POST for security reasons

// Changes & Justifications

// Use resource-based naming
//  Instead of /events/create, use /events/new (for a creation form).
//  Instead of /events/update, use /events/{id}/edit (for the edit form).

// Use HTTP methods properly
//  POST /events → Create a new event
//  PUT /events/{id} → Update an event
//  DELETE /events/{id} → Delete an event
//  GET /events/{id} → Show details of a single event

// Use {id} as a placeholder for resources
//  /committees/{id} instead of /committees/update
//  /accounts/{id}/edit instead of /accounts/update

// Use POST for logout instead of GET
//  Logging out should change the system state, so it’s better suited to POST rather than GET.
/*
---------------------------------------------------------------------
*/
// When to Use PUT or PATCH?
// Use PUT if you want to replace the entire resource.
//  Example: Updating an event with a new name, date, and location (all fields must be sent).

// Use PATCH if you want to update only specific fields.
//  Example: Changing just the date of an event without touching the name or location.

// Most modern APIs prefer PATCH for updates because: 
// ✅ It prevents accidental data loss (does not overwrite other fields).
// ✅ It is more efficient (sends less data).
// ✅ It aligns better with real-world use cases where partial updates are common.

// Use PUT only if the entire resource must be replaced.
