# ErrorHandler producing OOM error

## Description

On some OOM errors the Symfony ErrorHandler itself throws an OOM error trying to handle the previous error.

## To run:

If you have docker: simply run `reproduce-error.sh` to reproduce error.

If you don't have docker: you will have to set the project up yourself. Run the `app:bug` to reproduce the error.

