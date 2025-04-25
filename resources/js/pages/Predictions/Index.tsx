import AppLayout from '@/layouts/app-layout';
import { Head } from '@inertiajs/react';
import { Prediction } from '@/types';
import {
    Table,
    TableBody,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
} from "@/components/ui/table"
import { Button } from "@/components/ui/button"
import axios from 'axios';
import { useState } from 'react';

export default function Index({ predictions: initialPredictions }: { predictions: Prediction[] }) {
    const [predictions, setPredictions] = useState<Prediction[]>(initialPredictions);

    const togglePayment = async (predictionId: number) => {
        try {
            const response = await axios.put(route('predictions.toggle-payment', predictionId));

            const updatedPrediction: Prediction = response.data;

            setPredictions(prevPredictions =>
                prevPredictions.map(prediction =>
                    prediction.id === predictionId
                        ? updatedPrediction
                        : prediction
                )
            );
        } catch (error) {
            console.error('Error updating payment status:', error);
        }
    };

    return (
        <AppLayout>
            <Head title="Alle voorspellingen" />
            <div>
                <Table className={'mt-4'}>
                    <TableHeader>
                        <TableRow>
                            <TableHead>Voorspelling</TableHead>
                            <TableHead className="">Naam</TableHead>
                            <TableHead className="">Email</TableHead>
                            <TableHead className="">Betaald</TableHead>
                            <TableHead className="w-[100px]">Actie</TableHead>
                        </TableRow>
                    </TableHeader>
                    <TableBody>
                        {predictions.map((prediction) => (
                            <TableRow key={prediction.id}>
                                <TableCell>{prediction.prediction}</TableCell>
                                <TableCell>{prediction.user.name}</TableCell>
                                <TableCell>{prediction.user.email}</TableCell>
                                <TableCell className={prediction.is_payed ? 'text-green-600' : 'text-red-700'}>
                                    {prediction.is_payed ? 'Betaald' : 'Niet betaald'}
                                </TableCell>
                                <TableCell>
                                    <Button
                                        variant="outline"
                                        size="sm"
                                        onClick={() => togglePayment(prediction.id)}
                                    >
                                        {prediction.is_payed ? 'Markeer als niet betaald' : 'Markeer als betaald'}
                                    </Button>
                                </TableCell>
                            </TableRow>
                        ))}
                    </TableBody>
                </Table>
            </div>
        </AppLayout>
    );
}