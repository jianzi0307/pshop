#!/bin/bash
PROJECT_BASE_PATH=/Users/jianzi0307/Development/PHPWorkSpace/pshop
cd $PROJECT_BASE_PATH
phalcon all-models --config config/config.ini --models apps/admin/models --namespace apps\\admin\\models --extends Base --get-set --doc --relations --fk --validations --force
