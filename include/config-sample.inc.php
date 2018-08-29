<?php

/*
|--------------------------------------------------------------------------
| Database Configuration
|--------------------------------------------------------------------------
*/

// The database DSN
$_config['db_connect'] = 'mysql:host=localhost;dbname=ENTER-DB-NAME';

// The database username
$_config['db_user'] = 'ENTER-DB-USER';

// The database password
$_config['db_pass'] = 'ENTER-DB-PASS';

/*
|--------------------------------------------------------------------------
| General Configuration
|--------------------------------------------------------------------------
*/

// Maximum number of connected peers
$_config['max_peers'] = 30;

// Enable testnet mode for development
$_config['testnet'] = false;

// To avoid any problems if other clones are made
$_config['coin'] = 'arionum';

// Allow others to connect to the node api (if set to false, only the below 'allowed_hosts' are allowed)
$_config['public_api'] = true;

// Hosts that are allowed to mine on this node
$_config['allowed_hosts'] = [
    '127.0.0.1',
];

/*
|--------------------------------------------------------------------------
| Peer Configuration
|--------------------------------------------------------------------------
*/

// The number of peers to send each new transaction to
$_config['transaction_propagation_peers'] = 5;

// How many new peers to check from each peer
$_config['max_test_peers'] = 5;

/*
|--------------------------------------------------------------------------
| Mempool Configuration
|--------------------------------------------------------------------------
*/

// The maximum transactions to accept from a single peer
$_config['peer_max_mempool'] = 100;

// The maximum number of mempool transactions to be rebroadcasted
$_config['max_mempool_rebroadcast'] = 5000;

// The number of blocks between rebroadcasting transactions
$_config['sanity_rebroadcast_height'] = 30;

/*
|--------------------------------------------------------------------------
| Sanity Configuration
|--------------------------------------------------------------------------
*/

// Recheck the last blocks on sanity
$_config['sanity_recheck_blocks'] = 10;

// The interval to run the sanity in seconds
$_config['sanity_interval'] = 900;

// Enable setting a new hostname (should be used only if you want to change the hostname)
$_config['allow_hostname_change'] = false;

// Rebroadcast local transactions when running sanity
$_config['sanity_rebroadcast_locals'] = true;

// Get more peers?
$_config['get_more_peers'] = true;

/*
|--------------------------------------------------------------------------
| Logging Configuration
|--------------------------------------------------------------------------
*/

// Enable log output to the specified file
$_config['enable_logging'] = false;

// The specified file to write to (this should not be publicly visible)
$_config['log_file'] = '/var/log/aro.log';

// Log verbosity (default 0, maximum 3)
$_config['log_verbosity'] = 0;

/*
|--------------------------------------------------------------------------
| Masternode Configuration
|--------------------------------------------------------------------------
*/

// Enable this node as a masternode
$_config['masternode'] = false;

// The public key for the masternode
$_config['masternode_public_key'] = '';
