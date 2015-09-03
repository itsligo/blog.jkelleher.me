---
title: Casual Gaming & Silverlight
date: 2010/03/17 18:45:00
taxonomy: 
 category: blog 
---

## [Grant Skinner](http://gskinner.com/blog/)

![](http://api.ning.com/files/7kJAUAop4jgIgXDbD2uSwkhAfwSTnuY*SVRfntvl2JUUeYYf-pZXCcOMeebD2DOFJYKVWkzdanpdL5D*jtUAPHa6eQVpo7d4/gskinner09_1_bw.jpg?width=183&height=183&crop=1%3A1)

Casual gaming on the rise significantly. Market dominated (65%) by women. Social gaming rising exponentially. Developers are taking on the bulk of the work ahead of designers. Big companies are starting to move into the casual games space making opportunities for folk to get paid.

**[Silverlight multiplayer games](http://www.slideshare.net/jkelleher/silverlight-multiplayer-games-3457708)**

View more [presentations](http://www.slideshare.net/) from [jkelleher](http://www.slideshare.net/jkelleher).

Facebook dominate the social games market. They are about to rollout FB credits. Currently growing at 10%.

## Game developer qualifications

One of the best ways to expand your abilities as a developer, but requires a special type of developer. Grant sees multiplayer game development as a superset of game development, itself being a superset of application development.

Optimisation: of memory, of performance, encompassing code, graphics, architecture and algorithms.

Code optimisation: good understanding of compiler, runtime, timing model and GC. Few profiling tools for Silverlight: XPerf, Eqatec Profiler, Silverlight Spy.

Graphics optimisation: e.g. impact of vector vs. bitmap vs. cached art, understanding GPU accelration and cost of shaders and 2.5D effects.

Creative architecture: compromises are necessary to optimise; abstraction and low coupling come at the cost of some performance.

Algorithms: Games frequently rely on performance critical algorithms for tasks like path finding, proximity detection, spatial division, data manipulation, and physics simulation. E.g. A* gives good results but is costly or large maps and returns poor results when it can’t find a path. Therefore there’s a need to evaluate algorithms.

Math: basic knowledge of elementary math, spatial math, bitwise ops, and trig. Some calculus and physics also good.

Game experience: the user experience is more tightly bound to development than in RIA development – so you need to love games to create them.

Interaction and display: more granular control of interactions needed, and the display. E.g. limitations of mouse leave, tracking key down state (ex. KeyHandler), handing key repeat, etc.

Spiking: process of creating small, isolated tests broadly used in development. Silverlight/VS not particularly suited but some approaches work.

> Approach 1: Create a solution in VS for your spikes and add any shared class libraries. Then create a web project and set its start action to ‘current page’. Then create new spikes as new projects in the solution.

> Approach 2: Create a new project for all your spikes and create a new spike as a UserControl. Switch the RootVisual for your application either in code. Similarly to this, you can simply load in your soke as the primary child of a simple harness app, and change it at runtime.

Programmatic motion: Lot of ways to move elements around on the screen. Ex. programmatic eases, linear, simple, acceleratory, cartesian, vector/angular.

Collision Detection: Multiple approaches: rectangular, point to shape (VisualTreeHelper.FindElementsInHostCoordinates), mathematical, & shape to shape (w/custom shader)

## Multiplayer Games Extras

Models:

> Server as host: Server manages game state and handles all significant logic with clients acting as views.
Client as host: One client promoted to host/super client and owns the definitive game state (possible exposure to hacking)

Turn-based asynchronous/social:

> Interactions between players are asynchronous or have minimal intersection. E.g. turn based or in Club Penguin where timing interaction isn’t critical. More traditional networking approach (http, request based) works. Requires separate messaging. game state lives on the server and must be maintained for life of game.

Turn-based synchronous:

> Players alternate turns in a single gaming session. Can use either http requests & polling or socket connections. Latency has little impact. State can live on the client or the server.

Real-time:

> All players active simultaneously and can interact with each other in real time. Real time messaging broken into 3 message types:
>
>   * interactions – disseminate user interactions to server/clients
>   * game events – notifications of significant game events
>   * state updates – full or partial state information

> Handling latency: generally range 60-300ms (client to server to client). Better connected and more localised servers (e.g. EU/US) will reduce this. Server based game logic also greatly reduces the impact of latency. Strategies like delaying user inputs to account for latency, interpolating values based on known/estimated latency, and making interactions ‘fuzzy’ to reduce obvious discrepancies.

Minimising Cheating:

> Incredible amount of hacking; story – one company uses documentation on hacking code since it’s better than their own. They use packet sniffing/injection, decompiling/modifying/redistributing your game client etc. Can be minimised by keeping more logic on server (expensive), random checks, client ‘honesty’ heuristics and obfuscation.

Market:

> Jave losing marketshare because: lack of tooling / support for animation and interactive design. Higher barrier to entry for users and developerrs. Large file size, slower initialisation.
>
> Flash: ubiquity, low barrier to entry for dev and users; strong toolset for animation, interactive design & dev; simple run-time updating; robust approachable language, good code perf, reasonable graphic perf; strong & vibrant community; portability to AIR
>
> Silverlight: great dev environment and debugging; server side integration; access to mature game libraries & commercial components; some XNA libraries can be used via Silversprite; code execution ‘phenomenal’; multi-threading; GPU support (limited); portability to Phone, XBLA, WPF. OOBE great; easy to move to native desktop application;
>
> gskinner.com/blog @gskinner

