<?php
/*
 * Copyright (C) 2013 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
//  Author: Tony Gaitatzis - http://www.linkedin.com/in/tonygaitatzis

/**
 * this information can be found at https://code.google.com/apis/console/
 * under the "API Access menu"
 * more information available at https://developers.google.com/glass/quickstart/php
 */
$api_client_id = "YOUR_API_CLIENT_ID";  
$api_client_secret = "YOUR_CLIENT_SECRET";
$api_simple_key = "YOUR_SIMPLE_KEY";

// this will need to be congruent with the Redirect URLs listed in the API Access section of 
// https://code.google.com/apis/console/.
// Redirect URIs will need to include https://example.com/glasswarename/oauth2callback.php
$base_url = "YOUR_URL"; // "https://example.com/glasswarename"

// This should be writable by your web server's user
$sqlite_database = "YOUR_DATABASE"; // "/var/db/glasswarename.sqlite";