# TYPO3 Extension `academic_networks_tt_address`
## About
academic_networks_tt_address is an extension that extends the tt_address module of the typo3 CMS. It adds research related social media channels to the social media address block.
The aim is to expand websites of universities and researchers to include links to common profiles of researchers


## Dependecies

- EXT:tt_address
- EXT:extender

optional:

-  academicons css style https://jpswalsh.github.io/academicons/

## How to install
Follow the instructions of the tt_address manual: https://docs.typo3.org/p/friendsoftypo3/tt-address/5.3/en-us/Development/ExtendTtAddress/Index.html#configuration-tca-overrides-tt-address-php

1. install EXT:extender https://docs.typo3.org/p/evoweb/extender/8.0/en-us/Installation/Index.html
2. install EXT:academic_networks_tt_address
3. use the new fields in the frontend templates of tt_address (see example in https://github.com/karliwalti/academic_networks_tt_address/tree/main/Resources/Private folders)
optional:
4. add academicons css style to your pages for adding icons in template (see example in https://github.com/karliwalti/academic_networks_tt_address/tree/main/Resources/Private folders)


### composer
 ! NOT yet supported !
Install the extension by using composer and `composer req karliwalti/academic-networks-tt-address` or by downloading it in the extension manager or on https://extensions.typo3.org/extension/academic_networks_tt_address/.

## Available fields

We try to keep up with the dynamic changes in this field. i.e. in recent years networks have been consolidated (ResearcherID and publons) or closed (mendeley)

| field name | description | link | recommended use |
|:---------|:---------|:-------------|:-----------------|
| {address.orcid} | ORCID ID | https://orcid.org/ | https://orcid.org/{address.orcid} |
| {address.scholar} | Google Scholar | https://scholar.google.com/ | https://scholar.google.com/citations?user={address.scholar} |
| {address.researcherid} | Web of Science ResearcherID  | https://www.webofscience.com/wos/woscc/basic-search | http://www.researcherid.com/rid/{address.researcherid} or https://publons.com/researcher/{address.researcherid} |
| {address.researchgate} | Research gate | https://www.researchgate.net/| https://www.researchgate.net/profile/{address.researchgate}


## Contributions / requests
If you would like to report issues or suggest further fields relevant for academic profiles, please open a ticket.
