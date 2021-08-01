@extends('layouts.app')

@section('content')

    <div class="pt-5 mt-4"></div>

    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Services</h2>
                <ol>
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Services</li>
                </ol>
            </div>

        </div>
    </section>

    <main id="main">
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <p>
                    <h2 class="section-heading">Services</h2><br/>

                    <div class="t-2" >
                        <ul style="list-style: none">
                            <li><h5>Training</h5></li>
                            <li><a href="#incubation"><h5>Incubation</h5></a></li>
                            <li><h5>Coaching And Mentorship</h5></li>
                            <li><a href="#fis"><h5>Female Innovative Support Program</h5></a></li>
                        </ul>
                    </div>

                    <div class="m-2">
                        <h3>Trainings</h3>
                        <ul style="list-style: none">
                            <li><a href="#etw">Entrepreneurship Training Workshop (ETW)
                                </a></li>
                            </a></li>
                            <li><a href="#yet">Youth Entrepreneurship Training (YET)</a></li>
                            <li><a href="#canvas-workshop">Business model Canvas (BMC)</a></li>
                            <li><a href="#bussines-planning">Business Planning
                                </a></li>
                            <li><a href="#Holistic">Holistic Business Idea Developments training</a></li>
                        </ul>
                    </div>
                    <br/>
                    <br/>
                    <section id="etw">

                        <h3> Entrepreneurship Training Workshop(ETW)</h3>
                        <h5>overview</h5>
                        <p>Entrepreneurship Training Workshop (ETW) is EDC’s Ethiopia flagship entrepreneurship
                            development program. The behavioral approach, which the ETW is based on, aims at developing
                            entrepreneurship as a set of specific competencies and practices that can be observed,
                            recognized, applied and acquired by entrepreneurs on their daily lives.<br/>
                            <br/> By fostering participants’ motivation and self-confidence, the ETW manages to show
                            entrepreneurs the difference between merely running a business and building a
                            growth-oriented enterprise.
                            The training is delivered by EDC-Ethiopia national, master and international trainer
                            trainers who have entrepreneurial practices and experiences by themselves. Training is a
                            6-day and 48 hours long course.  Participants who successfully complete the programme and
                            fulfil the training requirements will be provided with a Certificate of Participation by
                            EDC-Ethiopia.
                        </p>

                    </section>
                    <section id="yet">
                        <div class="h3">Youth Entrepreneurship Training (YET)</div>
                        <h5>overview</h5>
                        <p>The Youth Entrepreneurship Training (YET) is a two-day training program for youth who are
                            anticipating to establish their own business. The training inspires and motivates
                            participant to develop
                            the attitude of entrepreneurship.</p><br/>
                        <p>
                            It is highly inspirational program aimed
                            at rousing the youth to consider entrepreneur as
                            viable career option. It also helps the participants
                            practice some of the basic requite for business
                            start-up such as idea generation and opportunity identification, and business planning. The
                            training is delivered by EDC-Ethiopia national, master and international trainer trainers
                            who have entrepreneurial practices and experiences by themselves.
                        </p><br/>
                        <p>Participants who successfully complete
                            the programme and fulfil the training requirements will be provided with a Certificate of
                            Participation. The requirements include full attendance of all sessions and successfully
                            completing assignments throughout
                            the 2-day training programme</p>

                    </section>
                    <section id="Holistic">
                        <h3>Holistic Business Idea Development
                        </h3>
                        <h5>overview</h5>
                        <p>Holistic Business idea Development training is a 6-day training created to better understand
                            about business ideas. This training will cover an about business ideas and to make them
                            worthwhile based on a realistic concept and identify ways on how to go forward with the
                            ideas. Additionally, this training will provide a first route into entrepreneurship in
                            general and to create a more realistic picture about the life of an entrepreneur and how
                            people can use their skills and interests to improve their chances by finding the right idea
                            for them and become successful with it. The training is derived from GIZ Training designed
                            Phillip Travers. It is also highly recommended for Higher Education instructors involved in
                            business incubation and students who want to launch
                            their own business.
                        </p><br/>
                        <p>In this workshop the participants will acquire knowledge and skills to build a solid base to
                            determine which ideas for prototypes are valuable to go for, how to plan the development of
                            the prototypes and how to illustrate and present the ideas to gain necessary support for
                            realizing the prototypes.
                        </p>


                    </section>
                    <section id="canvas-workshop">
                        <h3>Business Model Canvas Workshop</h3>
                        <h5>overview</h5>
                        <p>
                            The business model canvas is strategic management and lean start-up template for developing
                            new and redesigning existing models to create competitive advantages.
                        </p>
                        <br/>
                        <p>Based on the framework developed by strategyzer,
                            the canvas is presented as a visual chart with 9
                            building blocks spanning the areas of the organizations core offering, infrastructure,
                            customers, and finances. The 9 blocks include: customer segments, Value propositions,
                            channels, customer relationships, revenue streams, Key resources,
                            key activities, key partnerships and cost structure.</p><br/>
                        <p><br/>
                        <p>In this workshop, participants will acquire the knowledges and skills to apply the BMC to
                            develop innovative business models of value creation or transform the current one.
                        </p>

                    </section>

                    <section id="bussines-planning">
                        <h3>Business Planning</h3>
                        <h5>overview</h5>
                        <p>In this training the students will develop a full business plan for their technology-based
                            business idea under the guidance of an academic supervisor and a mentor from the
                            industry. </p>
                        <p>Discovering and evaluating business opportunities based on a technology invention by the
                            students and staffs. This training specifically aims to making a R&D plan and possibly a
                            prototype for a new product/service; Understanding the complex dynamic links between
                            technologies and markets; Gaining hands-on experience in business development and market
                            research and market validation, in developing a business model, a go to market plan and
                            financial Projections and Making a full business plan and executive summary -Learn how to
                            present
                            and communicate a new business idea and planning.
                        </p>
                    </section>
                    <section id="incubation">
                        <h3>ASTU-INCUBATION PROGRAM</h3>
                        <h5>overview</h5>
                        <p>ASTU-EDC also run incubation program. The program nurtures novice entrepreneurs at the
                            earliest stage of technological innovation, helps them implement their ideas by turning them
                            into commercial products and form productive business ventures in Ethiopia. By absorbing a
                            large portion of the risk at this early stage, where commercial money plays a minor role,
                            the ASTU -Incubation provide entrepreneurs with physical premises, financial resources for
                            prototype development, tools, professional guidance and administrative assistance - so that,
                            during their stay in the incubator, they may turn their abstract ideas into products of
                            proven feasibility, novelty and advantage that are sought in the national as well as
                            international marketplace.
                        </p><br/>
                        <h3>WHAT WILL our INCUBATION OFFER YOU?</h3>
                        <ul>
                            <li>Access laboratory equipment, software and lab facilities available in ASTU</li>
                            <li>Partner with industries for your R&D needs.</li>
                            <li>Meet experienced mentors, industry experts, strategic partners and investors through our
                                events.
                            </li>
                            <li>Build your team and scale your business through our value services platform which
                                provides training, professional services and talent support.
                            </li>
                            <li>Gain market exposure through trade missions or exhibitions, product launches, press
                                releases and media interviews.
                            </li>
                            <li>Financial support for prototype development</li>
                        </ul>
                    </section>
                    <section id="fis">
                        <h3>Females Innovative Support Group</h3>
                        <h5>overview</h5>
                        <p>FIS - Females Innovator Support Group is a community practice at Adama science and technology
                            University Entrepreneurship Development Center (EDC).
                            FIS strive to enable discussion and dialogue about existing female students’ problems and
                            solution and stimulate innovation through learning and sharing existing knowledge and
                            skill. </p><br/>
                        <p>In addition, the group aims to create a platform for discussion and introducing collaborative
                            activities/ process to encourage and support female students and Special Support for female
                            students with extra Capacities. Generally, the main purpose of the FIS is to provide support
                            for female students and works parallel with different stake holders for getting the
                            following benefits:</p>
                        <ul>
                            <li>To give training and workshops on business idea incubation</li>
                            <li>Technical and business mentoring</li>
                            <li>Market Linkage Support</li>
                            <li>Prototype Development & Testing</li>
                            <li>Working or incubating space.</li>
                        </ul>
                    </section>
                </div>

            </div>
        </div>
        </div>

    </main>
@endsection
