#!/bin/bash

__run_supervisor() {
echo "Running the httpd -k restart."
httpd -k restart
echo "Running the run_supervisor function."
supervisord -n
}

# Call all functions
__run_supervisor
