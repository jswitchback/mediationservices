role :app, %w{ubuntu@www.mediationservices.works}

set :ssh_options, {
  user: "ubuntu",
  keys: %w(~/.ssh/mediationservices.pem),
  forward_agent: false,
}

set :deploy_to, "/var/www/production"

