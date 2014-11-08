# -*- encoding: utf-8 -*-

Gem::Specification.new do |s|
  s.name = "compass-css-arrow"
  s.version = "0.0.4"

  s.required_rubygems_version = Gem::Requirement.new(">= 0") if s.respond_to? :required_rubygems_version=
  s.authors = ["Matthieu Sadouni"]
  s.date = "2013-03-19"
  s.description = "a css-only arrow for compass"
  s.email = ["matthieusadouni@gmail.com"]
  s.homepage = ""
  s.require_paths = ["lib"]
  s.rubyforge_project = "compass-css-arrow"
  s.rubygems_version = "2.0.14"
  s.summary = "a css-only arrow for compass"

  if s.respond_to? :specification_version then
    s.specification_version = 3

    if Gem::Version.new(Gem::VERSION) >= Gem::Version.new('1.2.0') then
      s.add_runtime_dependency(%q<compass>, [">= 0.11"])
    else
      s.add_dependency(%q<compass>, [">= 0.11"])
    end
  else
    s.add_dependency(%q<compass>, [">= 0.11"])
  end
end
