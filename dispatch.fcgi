#!/opt/ruby1.8.7/bin/ruby-1.8.7
require 'rubygems'
require 'rack'
require 'sinatra'
 
require 'start'
Rack::Handler::FastCGI.run Sinatra::Application