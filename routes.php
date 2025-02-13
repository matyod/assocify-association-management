<?php

$router->get('/', 'controllers/index.php');
$router->get('/home', 'controllers/home/index.php')->only('auth');

$router->get('/notifications', 'controllers/notifications/index.php')->only('auth');

$router->get('/events', 'controllers/events/index.php')->only('auth');
$router->get('/event', 'controllers/events/show.php')->only('auth');
$router->get('/events/create', 'controllers/events/create.php')->only('auth');
$router->get('/events/update', 'controllers/events/update.php')->only('auth');
// TODO: create post
// TODO: update post

$router->get('/committees', 'controllers/committees/index.php')->only('auth');
$router->get('/committee', 'controllers/committees/show.php')->only('auth');
// dump($_SERVER);
// dumpDie($_SESSION);
$router->get('/committees/create', 'controllers/committees/create.php')->only('auth');
$router->get('/committees/update', 'controllers/committees/update.php')->only('auth');
$router->get('/committees/member-registration', 'controllers/committees/members-reg.php')->only('auth');
// TODO: create post
// TODO: update post
// TODO: member register post

$router->get('/members', 'controllers/members/index.php')->only('auth');
$router->get('/member', 'controllers/members/show.php')->only('auth');
$router->get('/members/create', 'controllers/members/create.php')->only('auth');
// TODO: create post

$router->get('/accounts/update', 'controllers/accounts/update.php')->only('auth');
// TODO: update post

$router->get('/qr/scan', 'controllers/qr/scan.php')->only('auth');
$router->get('/qr/show', 'controllers/qr/show.php')->only('auth');

$router->get('/login', 'controllers/authentication/index.php')->only('guest');
$router->post('/login', 'controllers/authentication/login.php')->only('guest');
$router->get('/logout', 'controllers/authentication/logout.php')->only('auth');
// NOTE: maybe POST logout

$router->get('/register', 'controllers/registration/index.php')->only('guest');
$router->post('/register', 'controllers/registration/register.php')->only('guest');
// TODO: login post

// TODO testing only, delete later
$router->get('/log', 'controllers/logtest.php');
$router->get('/log2', 'controllers/logtest2.php');

# TODO

// To follow RESTful API best practices and avoid including CRUD operations in your URLs, 
// you should structure your routes based on resources rather than actions. 
// HTTP methods (GET, POST, PUT/PATCH, DELETE) should indicate what operation is being performed.
// Here’s how you can rename your routes while following RESTful conventions:

// Updated Routes
// $router->get('/', 'controllers/home/index.php');

// $router->get('/notifications', 'controllers/notifications/index.php');

// $router->get('/events', 'controllers/events/index.php');         // List all events
// $router->get('/events/new', 'controllers/events/create.php');    // Show event creation form
// $router->post('/events', 'controllers/events/store.php');        // Handle event creation
// $router->get('/events/{id}', 'controllers/events/show.php');     // Show a specific event
// $router->get('/events/{id}/edit', 'controllers/events/edit.php');// Show event edit form
// $router->put('/events/{id}', 'controllers/events/update.php');   // Update an event
// $router->delete('/events/{id}', 'controllers/events/delete.php');// Delete an event

// $router->get('/committees', 'controllers/committees/index.php');      // List all committees
// $router->get('/committees/new', 'controllers/committees/create.php'); // Show committee creation form
// $router->post('/committees', 'controllers/committees/store.php');     // Handle committee creation
// $router->get('/committees/{id}', 'controllers/committees/show.php');  // Show a specific committee
// $router->get('/committees/{id}/edit', 'controllers/committees/edit.php'); // Show committee edit form
// $router->put('/committees/{id}', 'controllers/committees/update.php'); // Update a committee
// $router->delete('/committees/{id}', 'controllers/committees/delete.php'); // Delete a committee
// $router->post('/committees/{id}/members', 'controllers/committees/members-reg.php'); // Register a member to a committee

// $router->get('/members', 'controllers/members/index.php');       // List all members
// $router->get('/members/new', 'controllers/members/create.php');  // Show member creation form
// $router->post('/members', 'controllers/members/store.php');      // Handle member creation
// $router->get('/members/{id}', 'controllers/members/show.php');   // Show a specific member

// $router->get('/accounts/{id}/edit', 'controllers/accounts/edit.php'); // Show account edit form
// $router->put('/accounts/{id}', 'controllers/accounts/update.php'); // Update an account

// $router->get('/qr/scan', 'controllers/qr/scan.php');  // Scan QR
// $router->get('/qr/show', 'controllers/qr/show.php');  // Show QR details

// $router->get('/login', 'controllers/auth/login.php');
// $router->post('/logout', 'controllers/auth/logout.php'); // Logout should use POST for security reasons

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
