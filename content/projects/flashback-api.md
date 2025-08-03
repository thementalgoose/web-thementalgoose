+++
title = "Flashback API"
date = 2022-01-01
draft = false
description = "API for the flashback application"
categories = ['Development']
tags = ["web", "api"]
+++

## Flashback API

The API behind the <a href="/projects/flashback">Flashback Android + iOS app</a>. Check out the API <a href="https://flashback.pages.dev">here</a>


### Schema

- /news.json
- /overview.json
    - /overview/[season].json
- /races
    - /races/[season].json
    - /races/[season]/[round].json
    - /races/[season]/events.json
- /drivers.json
    - /drivers/[driverid].json
- /constructors.json
    - /constructors/[constructorId].json
- /circuits.json
    - /circuits/[circuitId].json

### About the API

- Race, Qualifying, and Sprint data is synchronised and updated between 2 and 6 hours after the event (this depends on the timezone)
- Weather data of upcoming events is updated at least every day
- Youtube links for race highlights are attached to the data on the Monday after a race weekend
- Breaking news stories are added to news.json as and when they occur. This is usually driver changes or team changes, but may include other noteworthy events. _This is populated at the authors discression, and news will be removed when no longer relevant_


