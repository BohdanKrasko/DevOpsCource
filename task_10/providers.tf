provider "aws" {
  region                  = "us-east-1"
  # shared_credentials_files = [ "~/.aws/credentials" ]
  # profile                 = "cloud_tech"
}

terraform {
  backend "s3" {
    bucket         = "terraform-state-lock-task-10-bucket"
    key            = "task-10/terraform.tfstate"
    region         = "us-east-1"
    dynamodb_table = "terraform-state-lock-dynamo"
    # profile = "cloud_tech"
  }

  
}