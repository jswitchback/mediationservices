# -*- encoding: utf-8 -*-

Gem::Specification.new do |s|
  s.name = "singularitygs"
  s.version = "1.4.0"

  s.required_rubygems_version = Gem::Requirement.new(">= 1.2") if s.respond_to? :required_rubygems_version=
  s.authors = ["Scott Kellum", "Sam Richard"]
  s.date = "2014-08-23"
  s.description = "Advanced responsive grid system for Sass and Compass"
  s.email = ["scott@scottkellum.com", "snugug@gmail.com"]
  s.homepage = "http://singularity.gs"
  s.licenses = ["MIT", "GPL-3.0"]
  s.require_paths = ["lib"]
  s.rubyforge_project = "singularitygs"
  s.rubygems_version = "2.0.14"
  s.summary = "Singularity is a fluid grid system that can generate uniform columns as well as asymmetric and compound grids. It is designed to be extensible, adding additional outputs or grid generators are easy, and the core syntax is simple to build upon for custom input syntaxes."

  if s.respond_to? :specification_version then
    s.specification_version = 4

    if Gem::Version.new(Gem::VERSION) >= Gem::Version.new('1.2.0') then
      s.add_runtime_dependency(%q<sass>, ["~> 3.3"])
      s.add_runtime_dependency(%q<breakpoint>, ["~> 2.4"])
    else
      s.add_dependency(%q<sass>, ["~> 3.3"])
      s.add_dependency(%q<breakpoint>, ["~> 2.4"])
    end
  else
    s.add_dependency(%q<sass>, ["~> 3.3"])
    s.add_dependency(%q<breakpoint>, ["~> 2.4"])
  end
end
